<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Log;
use App\UploadDetail;

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

    public function getCurrentSeasonDetails() {
        return DB::table('season_details')->where('status', 1)->get();
    }

    public function getAdminDetails() {
        return DB::table('admin_details')->where('status', 1)->get();
    }

    function getSeasonAndAdminDetails() {        
        $season_details = $this->getCurrentSeasonDetails();
        $admin_details = $this->getAdminDetails()[0];
        $admin = array(
            "id"=> $admin_details->id,
            "name"=> $admin_details->name,
            "mobile"=> $admin_details->mobile,
            "watsapp"=> $admin_details->watsapp,
            "email_one"=> $admin_details->email_one,
            "email_two"=> $admin_details->email_two,
            "site_name"=> $admin_details->site_name
        );

        $data = array(
            "season_id" => $season_details[0]->id,
            "season_name" => $season_details[0]->name,
            "season_code" => $season_details[0]->code,
            "season_round" => $season_details[0]->round,
            "season_start_date" => $season_details[0]->start_date,
            "season_end_date" => $season_details[0]->end_date,
            "season_last_date" => $season_details[0]->last_date,
            "admin" => $admin
        );
        
        return $data;        
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
