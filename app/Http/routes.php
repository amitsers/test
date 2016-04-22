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
Route::get('/profile', 'UserController@profile');
Route::get('/activity', 'UserController@activity');
// Route::get('/activity/{payment_request_id}/{payment_id}', 'UserController@uploadThanks');
Route::get('/thanks', 'UserController@uploadThanks');
Route::post('/login', 'UserController@doLogin');
Route::post('/send-contact-msg', 'UserController@sendContactMsg');
Route::get('/logout', 'UserController@logout');
Route::post('/upload-song', 'UserController@uploadSong');
Route::get('/test', 'UserController@test');
Route::get('/update-profile-field', 'UserController@updateProfileField');

Route::get('/track', 'TrackController@trackUser');

Route::get('/admin/login', 'AdminController@doLogin');
Route::get('/admin/users', 'AdminController@index');
Route::get('/admin/select-unselect', 'AdminController@selectUnselect');


// Route::get('test', function(){
//     return "<h1>" . Input::get("color") . "</h1>";
// });