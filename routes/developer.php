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

//後台登入頁面
Route::get('login', 'Auth\LoginController@index');
//auth
Route::post('auth', 'Auth\LoginController@auth');
//logout
Route::post('logout', 'Auth\LoginController@logout');

//後台
Route::group(['middleware' => 'developerAuth'], function() {
    Route::get('/', 'IndexController@index');
});