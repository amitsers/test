<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}
