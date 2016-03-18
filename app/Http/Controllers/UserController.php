<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Instamojo;
use View;
use Illuminate\Support\Facades\Redirect;
use Route;
use App\UploadDetail;
use App\Transaction;
use Log;
use Illuminate\Support\Facades\Mail;
// use \Auth;

class UserController extends Controller
{
    function __construct() {
        $this->common = new CommonController();
        $this->auth = new AuthController();
        $this->config = new ConfigController();
        $this->file_name = 'UserController.php';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * This function is used to register user
     * It will only works on AJAX call.
     */
    public function register(Request $request) {

        $validator = $this->auth->validator($request->all());

        if ($validator->fails()) {
            return $validator->errors();
        }

        Auth::login($this->auth->create($request->all()));
        //return Auth::user();
        if (Auth::check()) {
            $id = Auth::user()->id;
            $username = explode('@', $request->email)[0];
            DB::table('users')->where('id', $id)
                ->update([
                    'username' => $username.'.'.$id,
                    'allow_payment' => 1
            ]);

            $this->common->log('error', $this->file_name, 'Inserted to users table successfully ' . __LINE__);
        }

        $data = array(
            'userId' => Auth::user()->id
        );

        return $this->common->getResponse(false, 'RGSTRD', 'Registered Successfully', $data);
    }

    /**
     * This function is used to view user profile
     **/
    public function profile() {
        return view('profile');
    }

    /**
     * This function is used to view user activity
     **/
    public function activity() {
        
        if (Auth::check()) {
            $upload_details = UploadDetail::with('transaction')
                ->where('user_id', Auth::user()->id)
                ->get();
            $data = array(
                'name' => Auth::user()->name,
                'upload_details' => $upload_details
            );

            // Mail::send('activity', $data, function ($message) {
            //     $message->to('amit.sers@gmail.com')->subject('Learning Laravel test email');
            // });


            // Mail::send('emails.thank', $data, function($message) use ($subject) {
            //   // note: if you don't set this, it will use the defaults from config/mail.php
            //   $message->from('admin@onlineaudition.xyz', 'Sender Name');
            //   $message->to('amitsinha559@gmail.com', 'John Smith')
            //     ->subject($subject);
            // });

            Mail::send('emails.thank',
            array(), function($message)
            {
                $message->from("admin@onlineaudition.xyz");
                $message->to("amitsinha559@gmail.com", "ADMIN_NAME")->subject('New site request');
            });



            // 'track_link' => $user_uploads->file_destination . '/' . $user_uploads->file_name,
            return view('activity', $data);
        } else {
            return 'Please login';
        }
        
    }

    /**
     * This function is used to send contact message
     * It will only works on AJAX call.
     */
    public function sendContactMsg(Request $request) {
        if($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]);

            if (count($validator->errors()) > 0) {
                return $validator->errors();
            }
        }
    }

    public function doLogin(Request $request) {

        if($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if (count($validator->errors()) > 0) {
                return $validator->errors();
            }

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return $this->common->getResponse(false, 'LGDIN', 'Login success', array('id' => Auth::user()->id));
            }
            

            return $this->common->getResponse(true, 'LDGFLD', 'Login failed', '');

        }


    }

    /**
     * This function is used to upload songs to server
     * Creates payment link and redirect it to instamojo page
     */
    function uploadSong(Request $request) {
        if (!Auth::check()) {
            return 'Please login';
        }

        $this->user_destination = 'uploads/'.(Auth::user()->username);
        if (Input::file('track') === null) {
             return Redirect::back()->withErrors(['File not found']);
        }
        $file = Input::file('track');
        if (!$file->getClientOriginalName()
            || !$file->getClientOriginalExtension()
            || !$file->getClientSize()
            || !$file->getClientMimeType()
            ) {
            return Redirect::back()->withErrors(['File properties mismatch']);
        }
        $allowed_audio_format = array('mp3', 'wav', 'ogg', 'wma', 'aac');
        if (!in_array($file->getClientOriginalExtension(), $allowed_audio_format)) {
            return Redirect::back()->withErrors(['Audio format not supported. Please choose any one format: mp3/wav/ogg/wma/aac']);
        }

        if ($file->getClientSize() > 8388608) {
            $this->common->log('warning', $this->file_name, 'File exceeds 8MB ' . __LINE__);
            return Redirect::back()->withErrors(['File size exceeds limit. Max file size: 8MB']);
        }

        $filename = uniqid() . '-' . $file->getClientOriginalName();
        
        $file->move($this->user_destination, $filename);

        $song_id = DB::table('upload_details')->insertGetId([
            'user_id' => Auth::user()->id,
            'file_name' => $filename,
            'file_destination' => $this->user_destination,
            'season_name' => $this->common->getSeasonName(),
            'status' => 1,
            'payment_status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $api = new Instamojo($this->config->getImojoConfig()['api_key'], 
            $this->config->getImojoConfig()['auth_token']);
        try {

            $create_payment_res = $api->paymentRequestCreate(array(
                "purpose" => $this->common->getPaymentDetails()['purpose'],
                "amount" => $this->common->getPaymentDetails()['amount'],
                "send_email" => $this->common->getPaymentDetails()['send_email'],
                "email" =>  Auth::user()->email,
                "redirect_url" => $this->common->getPaymentDetails()['redirect_url'] //change it in live
                ));

            if ($create_payment_res && $create_payment_res['id']) {
                DB::table('transactions')->insert([
                    'user_id' => Auth::user()->id,
                    'song_id' => $song_id,
                    'payment_request_id' => $create_payment_res['id'],
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                    'amount' => $this->common->getPaymentDetails()['amount'],
                    'shorturl' => $create_payment_res['shorturl'],
                    'longurl' => $create_payment_res['longurl'],
                    'redirect_url' => $this->common->getPaymentDetails()['redirect_url'],
                    'webhook' => $this->common->getPaymentDetails()['webhook'],
                    'payment_request_status' => $create_payment_res['status'],
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
                $this->common->log('info', $this->file_name, 'Inserted to transactions table successfully - ' . __LINE__);
                return redirect()->away($create_payment_res['longurl']);
            } else {
                $this->common->log('error', $this->file_name, 'Invalid payment link ' . __LINE__);
                // send mail here to admin
                echo "send mail to admin";
                
            }


        }
        catch (\Exception $e) {
            $this->common->log('error', $this->file_name, 'Payment link not created - ' . __LINE__);
            print('Error: ' . $e->getMessage());
            // send mail to admin
            echo "send mail to admin-> exception";
        }

        return redirect()->route('activity');
    }


    /**
     * This function is used for thanks page after payment
     */
    public function uploadThanks() {

        if (Input::get("payment_request_id") && Input::get("payment_id")) {

            $request = curl_init('https://www.instamojo.com/api/1.1/payment-requests/'.Input::get("payment_request_id").'/');
            curl_setopt($request, CURLOPT_HTTPHEADER, array(
                'X-Api-Key: ' . $this->config->getImojoConfig()['api_key'],
                'X-Auth-Token: ' . $this->config->getImojoConfig()['auth_token']
            ));

            curl_setopt ($request, CURLOPT_RETURNTRANSFER, true);
            $result = json_decode(curl_exec($request));

            if (!$result->success) {
                $this->common->log('warning', $this->file_name, 'Payment Unsuccessfull - ' . __LINE__);
                return Redirect::to('activity')->with('payment_message', 'Payment unsuccessfull');
            }
            echo "<pre>";
            print_r($result);
            echo "</pre><br/><br/><br/>";

            if (isset($result->payment_request)
                && isset($result->payment_request->payments)
                && (count($result->payment_request->payments) > 0)) {
                if($result->payment_request->payments[0]->payment_id === Input::get("payment_id")) {
                    $this->common->log('debug', $this->file_name, 'Got all payment detials - ' . __LINE__);
                    DB::table('transactions')
                    ->where('payment_request_id', $result->payment_request->id)
                    ->update([
                        'payment_id' => $result->payment_request->payments[0]->payment_id,
                        'phone' => $result->payment_request->payments[0]->buyer_phone,
                        'email' => $result->payment_request->payments[0]->buyer_email,
                        'payment_request_status' => $result->payment_request->status,
                        'payment_status' => $result->payment_request->payments[0]->status,
                        'payment_date_time' => $result->payment_request->payments[0]->created_at,
                        'updated_at' => date("Y-m-d H:i:s")
                    ]);

                    $this->common->log('debug', $this->file_name, 'Transaction table updated with all payment details - ' . __LINE__);

                    $song_id = DB::table('transactions')
                    ->where('payment_request_id', $result->payment_request->id)
                    ->first()->song_id;

                    DB::table('upload_details')
                    ->where('id', $song_id)
                    ->update([
                        'payment_status' => 1,
                        'updated_at' => date("Y-m-d H:i:s")
                    ]);

                    $this->common->log('debug', $this->file_name, 'upload_details table updated with status & date - ' . __LINE__);

                    echo 'send mail - payment done successfully';
                    return Redirect::to('activity')->with('payment_message', 'Payment done successfully!!');
                }

                $this->common->log('error', $this->file_name, 'Got wrong payment details - ' . __LINE__);
                
                echo 'some mismatch send mail';
                return Redirect::to('activity')->with('payment_message', 'Something went wrong. Contact support.');
            }
        }

        return Redirect::to('activity');

    }


    /**
     * Log the user out of the application..
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    public function updateProfileField(Request $request) {
        return $request->all();
    }

    public function test() {



        // $datatopost = array (
        //     'purpose' => 'One - to test email and name',
        //     'amount' => 9
        // );

        // $request = curl_init('https://www.instamojo.com/api/1.1/payment-requests/39ad214e584241a98b67aa0c7ef2e5e2');
        // curl_setopt($request, CURLOPT_HTTPHEADER, array(
        //     'X-Api-Key: ' . $this->config->getImojoConfig()['api_key'],
        //     'X-Auth-Token: ' . $this->config->getImojoConfig()['auth_token']
        // ));

        // // curl_setopt ($request, CURLOPT_POST, true);
        // curl_setopt ($request, CURLOPT_POSTFIELDS, $datatopost);
        // curl_setopt ($request, CURLOPT_RETURNTRANSFER, true);


        // $result = curl_exec($request);
        // print($result);
        
        // $this->config->getImojoConfig()['api_key'];
        // $api = new Instamojo($this->config->getImojoConfig()['api_key'], 
        //     $this->config->getImojoConfig()['auth_token']);
            // $result = file_get_contents('http://requestb.in/qotpl0qo');
            // echo $result;
        // $response = $api->paymentDetail('MOJO6125005J42405869');
        // echo "<pre>";
        // print_r($response);
        // echo "</pre>";

        // $response = $api->paymentRequestCreate(array(
        //         "purpose" => "Online Audition 28/1",
        //         "amount" => "9",
        //         "redirect_url" => "http://kaakai.in",
        //         "webhook" => 'http://requestb.in/qotpl0qo',
        //         "allow_repeated_payments" => true,
        //         ));
        //     print_r($response);

        // try {
        //     $response = $api->paymentRequestCreate(array(
        //         "purpose" => "Online Aud",
        //         "amount" => "1",
        //         "send_email" => true,
        //         "email" => "amitsinha559@gmail.com",
        //         "redirect_url" => "http://kaakai.in"
        //         ));
        //     print_r($response);
        // }
        // catch (\Exception $e) {
        //     print('Error: ' . $e->getMessage());
        // }

        return 'eeeeee';
    }
}
