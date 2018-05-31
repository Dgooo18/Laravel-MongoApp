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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Registro', function () {
    return view('index');
});
Route::get('/Ingresar', function () {
    return view('Login');
});

Route::get('/test', 'TestController@test');
Route::any('/test2', 'TestController@test2');
Route::any('/deleteUser', 'TestController@deleteUser');
Route::any('/Login', 'TestController@Login');
Route::any('/Update', 'TestController@update');


//
