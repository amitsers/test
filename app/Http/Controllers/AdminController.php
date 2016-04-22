<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $all_user_details = User::with('uploadDetail')
                ->get();

        $users = array();
        foreach ($all_user_details as $key => $value) {
            $users[$key]['id'] = $value->id;
            $users[$key]['name'] = $value->name;
            $users[$key]['email'] = $value->email;
            $users[$key]['username'] = $value->username;
            $users[$key]['age'] = $value->age;
            $users[$key]['allow_payment'] = $value->name;
            $users[$key]['created_at'] = $value->created_at;
            foreach ($all_user_details[$key]->uploadDetail as $key1 => $value1) {
                $users[$key]['upload_detail'][$key1]['id'] = $value1->id;
                $users[$key]['upload_detail'][$key1]['user_id'] = $value1->user_id;
                $users[$key]['upload_detail'][$key1]['file_destination'] = $value1->file_destination;
                $users[$key]['upload_detail'][$key1]['file_name'] = $value1->file_name;
                $users[$key]['upload_detail'][$key1]['status'] = $value1->status;
                $users[$key]['upload_detail'][$key1]['payment_status'] = $value1->payment_status;
                $users[$key]['upload_detail'][$key1]['is_selected'] = $value1->is_selected;
                $users[$key]['upload_detail'][$key1]['season_name'] = $value1->season_name;
                $users[$key]['upload_detail'][$key1]['created_at'] = $value1->created_at->toDateTimeString();
                $users[$key]['upload_detail'][$key1]['updated_at'] = $value1->updated_at->toDateTimeString();
            }
        }

        // return $users;
        $data = array (
            "users" => $users
        );
        // return $all_user_details;
        return view('users', $data);
    }

    public function selectUnselect(Request $request) {
        if($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'season_details_id' => 'required',
                'is_selected' => 'required',
                'song_id' => 'required'
            ]);

            if (count($validator->errors()) > 0) {
                return $validator->errors();
            }

            DB::table('upload_details')
                ->where('user_id', $request->user_id)
                ->where('id', $request->song_id)
                ->update(['is_selected' => $request->is_selected]);

            return 1;

        }
        return 'Invalid Access';
    }
}
