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
            $users[$key]['is_selected'] = $value->is_selected;
            $users[$key]['allow_payment'] = $value->name;
            $users[$key]['created_at'] = $value->email;
            foreach ($all_user_details[$key]->uploadDetail as $key1 => $value1) {
                $users[$key]['upload_detail'][$key1]['id'] = $value1->id;
                $users[$key]['upload_detail'][$key1]['user_id'] = $value1->user_id;
                $users[$key]['upload_detail'][$key1]['file_destination'] = $value1->file_destination;
                $users[$key]['upload_detail'][$key1]['file_name'] = $value1->file_name;
                $users[$key]['upload_detail'][$key1]['status'] = $value1->status;
                $users[$key]['upload_detail'][$key1]['payment_status'] = $value1->payment_status;
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
                'is_selected' => 'required'
            ]);

            if (count($validator->errors()) > 0) {
                return $validator->errors();
            }

            DB::table('users')
                ->where('id', $request->user_id)
                ->update(['is_selected' => $request->is_selected]);

            if ($request->is_selected == 1) {   // selected
                DB::table('upload_details')->insert([
                    'user_id' => $request->user_id,
                    'season_details_id' => $request->season_details_id,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
            }

            if ($request->is_selected == 0) {   // not selected
                
            }
            // DB::table('upload_details')->insert([
            //     'user_id' => $request->user_id,
            //     'season_details_id' => $request->season_details_id,
            //     'created_at' => date("Y-m-d H:i:s"),
            //     'updated_at' => date("Y-m-d H:i:s")
            // ]);

            return 1;

        }
        return 'Invalid Access';
    }
}
