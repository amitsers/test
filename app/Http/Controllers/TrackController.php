<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommonController;
use Validator;
use Log;
use DB;

class TrackController extends Controller
{
    function __construct() {
        $this->common = new CommonController();
        $this->file_name = 'TrackController.php';
    }

    public function trackUser(Request $request) {
        $validator = Validator::make($request->all(), [
            'page' => 'required',
        ]);

        if($validator->fails()) {
            $this->common->log('error', $this->file_name, 'Unknown hit' . __LINE__);
            return 'Unknown hit';            
        }

        $ip = "";
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $is_same = DB::table('tracks')
                    ->where('date', date("Y-m-d"))
                    ->where('ip', $ip)
                    ->where('page', $request->page)
                    ->increment('hits');
        echo $is_same;
        if(!$is_same) {
            DB::table('tracks')->insert([
                'date' => date("Y-m-d H:i:s"),
                'ip' => $ip,
                'page' => $request->page,
                'hits' => 1
            ]);
        }
        return 'done';
    }
}
