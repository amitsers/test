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

// use \Auth;

class UserController extends Controller
{
    function __construct() {
        $this->common = new CommonController();
        $this->auth = new AuthController();
        $this->config = new ConfigController();
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
            DB::table('users')->where('id', $id)->update(['username' => $username.'.'.$id]);
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
        return view('activity');
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
     */
    function uploadSong(Request $request) {
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
            return Redirect::back()->withErrors(['File size exceeds limit. Max file size: 8MB']);
        }
        
        $file->move($this->user_destination, uniqid() . '-' . $file->getClientOriginalName());

        
        
        // $track = array(
        //     'name' => $file->getClientOriginalName(),
        //     'ori_extention' => $file->getClientOriginalExtension(),
        //     'extention' => $file->guessExtension(),
        //     'size' => $file->getClientSize(),
        //     'mime' => $file->getClientMimeType()
        // );

        // $temp = array(
        //     "test" => $track
        //     );
        return Redirect::back()->withErrors(['Uploaded successfully']);
        
        return view('test', $temp);
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
        $this->config->getImojoConfig()['api_key'];
        $api = new Instamojo($this->config->getImojoConfig()['api_key'], 
            $this->config->getImojoConfig()['auth_token']);
        
            $result = file_get_contents('http://requestb.in/ztm7wnzt');
            echo $result;
        

        // $response = $api->paymentRequestCreate(array(
        //         "purpose" => "Online Aud",
        //         "amount" => "9",
        //         "send_email" => true,
        //         "email" => "amitsinha559@gmail.com",
        //         "redirect_url" => "http://kaakai.in"
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
