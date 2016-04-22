<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{


    public function getImojoConfig() {
        return array(
            'api_key' => $this->IMOJO_API_KEY,
            'auth_token' => $this->IMOJO_AUTH_TOKEN
        );
    }
}
