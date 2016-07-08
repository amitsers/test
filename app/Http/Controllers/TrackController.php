<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommonController;
use Validator;
use Log;
use DB;
use App\TrackPhone;

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
                    ->where('date', date("Y-m-d H:i:s"))
                    ->where('ip', $ip)
                    ->where('page', $request->page)
                    ->where('campaign_id', $request->cid)
                    ->increment('hits');
        echo $is_same;
        if(!$is_same) {
            DB::table('tracks')->insert([
                'date' => date("Y-m-d H:i:s"),
                'ip' => $ip,
                'page' => $request->page,
                'campaign_id' => $request->cid,
                'hits' => 1
            ]);
        }
        return 'done';
    }

    public function trackPhone(Request $request) {
        $ip = "";
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $get_phone = DB::table('track_phones')
                ->where('mobile', $request->mobile_no)
                ->get();
        if(empty($get_phone)) {
            DB::table('track_phones')->insertGetId([
                'mobile' => $request->mobile_no,
                'ip' => $ip
            ]);
            return 'done';
        }
        return 'exist';        
        
    }

    public function trackPageReference(Request $request) {
        $validator = Validator::make($request->all(), [
            'ref' => 'required',
        ]);

        if($validator->fails()) {
            $this->common->log('error', $this->file_name, 'Unknown hit trackPageReference' . __LINE__);
            return 'Unknown hit trackPageReference';
        }

        $ip = "";
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $is_same = DB::table('track_pages')
                    ->where('visit_date', date("Y-m-d"))
                    ->where('ip', $ip)
                    ->where('reference', $request->ref)
                    ->increment('views');

        if(!$is_same) {
            DB::table('track_pages')->insert([
                'visit_date' => date("Y-m-d"),
                'ip' => $ip,
                'reference' => $request->ref,
                'views' => 1
            ]);
        }
        return 'done';
    }
}
