<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Log;

class CommonController
{
    public function getResponse($isError, $code, $msg, $data){
        $res = array(
            'isError' => $isError,
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        );
        return $res;
    }

    public function validateUserName($username) {
    	if (isset($username) && (DB::table('users')->where('username', $username)->exists())) {
    		return true;
    	}
    	return false;
    }

    public function validateUserId($id) {
        if (isset($username) && (DB::table('users')->where('id', $id)->exists())) {
            return true;
        }
        return false;
    }

    public function getSeasonName() {
        return 'SEASON_1';
    }

    public function getPaymentLink() {
        return 'https://www.instamojo.com/@onlineaudition/39ad214e584241a98b67aa0c7ef2e5e2';
    }

    public function getPaymentDetails() {
        return array(
            'purpose' => "Online Audition - 02-02-2016",
            'amount' => "9",
            'send_email' => false,
            'redirect_url' => "http://kaakai.in",
            "webhook" => ''
        );
    }

    public function log($type, $file_name, $msg) {
        if ($type == "info") {
            Log::info($file_name . " - " . $msg);    
        }

        if ($type == "debug") {
            Log::debug($file_name . " - " . $msg);    
        }

        if ($type == "warning") {
            Log::warning($file_name . " - " . $msg);    
        }

        if ($type == "error") {
            Log::error($file_name . " - " . $msg);    
        }
        
    }

}
