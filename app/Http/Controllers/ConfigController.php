<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{

	private $IMOJO_API_KEY = '01c394f82e52ccca323fe49a9134ea74';
    private $IMOJO_AUTH_TOKEN = '065f04b26a3ec42ad59c776f883ef316';
    
    public function getImojoConfig() {
        return array(
            'api_key' => $this->IMOJO_API_KEY,
            'auth_token' => $this->IMOJO_AUTH_TOKEN
        );
    }
}
