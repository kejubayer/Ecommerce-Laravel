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

Route::get('/','HomeController@showHome')->name('home');
Route::get('category/{slug}','HomeController@showProductsByCategory')->name('category');

Route::get('login','AuthController@showLogin')->name('login');
Route::post('login','AuthController@processLogin');

Route::get('register','AuthController@showRegister')->name('register');
Route::post('register','AuthController@processRegister');

Route::get('profile','AuthController@showProfile')->name('profile');
Route::get('logout','AuthController@logout')->name('logout');

Route::get('/dashboard','DashboardController@showDashboard')->name('dashboard');

Route::get('/orders','OrdersController@index')->name('orders.index');
