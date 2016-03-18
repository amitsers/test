<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;

class IndexController extends Controller
{
    function __construct() {
        $this->auth = new AuthController();
        $this->file_name = 'IndexController.php';
    }

    public function index()
    {
    	$data = array();
    	if (Auth::check()) {
            $data = array(
            	"name" => Auth::user()->name
            );
        }
        return view('index', $data);
    }
    
}
