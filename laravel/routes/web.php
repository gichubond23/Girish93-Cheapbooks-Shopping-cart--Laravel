<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware'=>['web']], function (){
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcomelaravel');
});

Route::get('/loginpart', function () {
    return view('login');
});

Route::post('/registerpart', function () {
    return view('register');
});

Route::post('/thankyou', function () {
    return view('thank');
});



Route::get('/accountpart', function () {
    return view('account');
});

Route::post('store','test@store',function () {
	$sucess="success";
});

Route::post('loginvalid','test@loginvalid');
Route::post('show','products@show');
Route::post('edit','products@edit');
Route::get('create','products@create');
Route::get('index/{id}','cart@index');
Route::post('update','cart@update');
Route::post('destroy','cart@destroy');
Route::post('logout','cart@logout');
});


Route::get('/bootstrap', function () {
    return view('firstbootstrap');
});



