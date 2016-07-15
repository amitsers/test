<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CommonController;

class AllAuditionController extends Controller
{
    function __construct() {
        $this->auth = new AuthController();
        $this->common = new CommonController();
        $this->file_name = 'AllAuditionController.php';
        $this->data = $this->common->getSeasonAndAdminDetails();
        if (Auth::check()) {
            $this->data['user_name'] = Auth::user()->name;
        }
    }

    public function viewTheViralVoice() {
        return view('all-auditions.the-viral-voice', $this->data);
    }
    
    public function viewSingDilSe() {
        return view('all-auditions.sing-dil-se', $this->data);
    }
    
    public function viewIndianIdol() {
        return view('all-auditions.indian-idol', $this->data);
    }
    
    public function viewIndianIdolJunior() {
        return view('all-auditions.indian-idol-junior', $this->data);
    }  

    public function viewSaReGaMaPa() {
        return view('all-auditions.sa-re-ga-ma-pa', $this->data);
    }
    
    public function viewTheVoiceIndia() {
        return view('all-auditions.sa-re-ga-ma-pa', $this->data);
    }

    public function viewMagicalVoice() {
        return view('all-auditions.magical-voice', $this->data);
    }
    
    
}
