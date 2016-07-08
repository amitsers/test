<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AllAuditionController extends Controller
{
    public function viewTheViralVoice() {
        return view('all-auditions.the-viral-voice');
    }
    
    public function viewSingDilSe() {
        return view('all-auditions.sing-dil-se');
    }
    
    public function viewIndianIdol() {
        return view('all-auditions.indian-idol');
    }
    
    public function viewIndianIdolJunior() {
        return view('all-auditions.indian-idol-junior');
    }  

    public function viewSaReGaMaPa() {
        return view('all-auditions.sa-re-ga-ma-pa');
    }
    
    public function viewTheVoiceIndia() {
        return view('all-auditions.sa-re-ga-ma-pa');
    }

    public function viewMagicalVoice() {
        return view('all-auditions.magical-voice');
    }
    
    
}
