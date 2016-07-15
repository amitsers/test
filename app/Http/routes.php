<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/home', 'IndexController@index');
Route::get('/', 'IndexController@index');
Route::post('/register', 'UserController@register');
// Route::get('/profile', 'UserController@profile');
Route::get('/activity', 'UserController@activity');
// Route::get('/activity/{payment_request_id}/{payment_id}', 'UserController@uploadThanks');
Route::get('/thanks', 'UserController@uploadThanks');
Route::post('/login', 'UserController@doLogin');
Route::post('/send-contact-msg', 'UserController@sendContactMsg');
Route::get('/logout', 'UserController@logout');
Route::post('/upload-song', 'UserController@uploadSong');
Route::get('/test', 'UserController@test');
// Route::get('/update-profile-field', 'UserController@updateProfileField');

Route::get('/track', 'TrackController@trackUser');
Route::post('/track-phone', 'TrackController@trackPhone');
Route::get('/track-page-ref', 'TrackController@trackPageReference');

Route::get('/admin/login', 'AdminController@doLogin');
Route::get('/admin/users', 'AdminController@index');
Route::get('/admin/select-unselect', 'AdminController@selectUnselect');

Route::get('/the-viral-voice-online-audition-details', 'AllAuditionController@viewTheViralVoice');
Route::get('/sing-dil-se-audition', 'AllAuditionController@viewSingDilSe');
Route::get('/indian-idol-audition', 'AllAuditionController@viewIndianIdol');
Route::get('/indian-idol-junior-audition', 'AllAuditionController@viewIndianIdolJunior');
Route::get('/sa-re-ga-ma-pa-audition', 'AllAuditionController@viewSaReGaMaPa');
Route::get('/The-Voice-India-Online-Audition-Details', 'AllAuditionController@viewTheVoiceIndia');
Route::get('/magical-voice-of-india-audition', 'AllAuditionController@viewMagicalVoice');