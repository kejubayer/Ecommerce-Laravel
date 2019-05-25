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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::view('/home','home');

//Route::get('/home',\App\Http\Controllers\HomeController::class,'showHome');

Route::get('/','HomeController@showHome');
//Route::get('home','HomeController@showHome');

