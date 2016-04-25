<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CommonController;

use DB;

class IndexController extends Controller
{
    function __construct() {
        $this->auth = new AuthController();
        $this->common = new CommonController();
        $this->file_name = 'IndexController.php';
    }

    public function index()
    {
        $data = $this->common->getSeasonAndAdminDetails();        
    	if (Auth::check()) {
            $data['user_name'] = Auth::user()->name;
        }

        return view('index', $data);
    }
    
}
