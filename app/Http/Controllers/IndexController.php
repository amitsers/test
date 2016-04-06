<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;

use DB;

class IndexController extends Controller
{
    function __construct() {
        $this->auth = new AuthController();
        $this->file_name = 'IndexController.php';
    }

    public function index()
    {
        $season_details = DB::table('season_details')->where('status', 1)->get();
    	$data = array(
            "season_id" => $season_details[0]->id,
            "season_name" => $season_details[0]->name,
            "season_code" => $season_details[0]->code,
            "season_round" => $season_details[0]->round,
            "season_start_date" => $season_details[0]->start_date,
            "season_end_date" => $season_details[0]->end_date,
            "season_last_date" => $season_details[0]->last_date
        );
    	if (Auth::check()) {
            $data['user_name'] = Auth::user()->name;
        }
        return view('index', $data);
    }
    
}
