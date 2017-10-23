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
    return view('welcome');
});

//登录
Route::get('/login', 'Home\LoginController@index');
Route::post('/login', 'Home\LoginController@dologin');

Route::get('/register', 'Home\LoginController@register');
Route::post('/register', 'Home\LoginController@doregister');