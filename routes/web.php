<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	echo phpinfo(); 
    return view('welcome');
});

Route::get('google', function () {
    return view('googleAuth');
});

Route::get('auth/google', 'Auth\AuthController@redirectToGoogle');

Route::get('auth/google/callback', 'Auth\AuthController@handleGoogleCallback');


Route::get('glogin','UserController@googleLogin')->name('glogin') ;
Route::get('google-user','UserController@listGoogleUs');