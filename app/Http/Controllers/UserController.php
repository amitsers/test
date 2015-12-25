<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommonController;
// use \Auth;

class UserController extends Controller
{
    function __construct() {
        $this->common = new CommonController();
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

        if($request->ajax()) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric|min:15|max:35',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password',
        ]);

        if (count($validator->errors()) > 0) {
            return $validator->errors();
        }
        

            $email = $request->input('email');

            $user = DB::table('users')->where('email', $email)->count();
            if ($user == 0) {
                $id = DB::table('users')->insertGetId([
                    'name' => $request->input('name'),
                    'email' => $email,
                    'age' => $request->input('age'),
                    'password' => $request->input('password'),
                    'created_at' => date("Y-m-d H:i:s")
                ]);
                $data = array(
                    'userId' => $id
                );
                return $this->common->getResponse(false, 'RGSTRD', 'Registered Successfully', $data);

            } else {
                return $this->common->getResponse(true, 'EXST', 'Already Exists', '');
            }
        }
    }

    /**
     * This function is used to view user profile
     **/
    public function profile() {
        return view('profile');
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

    public function doLogin() {
        if($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'login_email' => 'required|email',
                'login_password' => 'required'
            ]);

            if (count($validator->errors()) > 0) {
                return $validator->errors();
            }

    //         $userdata = array(
    //     'email'     => $request->input('login_email'),
    //     'password'  => $request->input('login_password')
    // );


    // if (Auth::attempt($userdata)) {
    //     return 22222222222222222;
    // }

            // $login_email = $request->input('login_email');
            // $user = DB::table('users')->where('email', $login_email)->count();
            // if ($user > 0) {

            // } else {
            //     return $this->common->getResponse(true, 'NTEXST', 'Email not registered', '');
            // }
        }
    }
}
