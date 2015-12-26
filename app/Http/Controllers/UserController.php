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

// use \Auth;

class UserController extends Controller
{
    function __construct() {
        $this->common = new CommonController();
        $this->auth = new AuthController();
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

        if (Auth::check()) {

            // $username = explode('@', $request->email)[0];
            // if (!DB::table('users')->insert(['username' => $username])->where('id', Auth::user()->id)) {

            //     if (!DB::table('users')->insert(['username' => $username.$request->age])->where('id', Auth::user()->id)) {
            //         return DB::table('users')->getAll();
            //     }

            // }

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
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
}
