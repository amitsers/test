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
Route::post('/login', 'UserController@doLogin');
Route::post('/send-contact-msg', 'UserController@sendContactMsg');
Route::get('/logout', 'UserController@logout');
