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

//前台路由群组
Route::group(['prefix'=>'/','namespace'=>'Home'],function(){
	//前台登录页
	Route::get('login','HomeController@login');

	//前台首页
	Route::get('','HomeController@index');
});

// 后台路由群组
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	//后台登录页
	Route::get('login','AdminController@login');

	//后台首页
	Route::get('/','AdminController@index');

	//用户模块
	Route::resource('users','UsersController');

	//栏目模块
	Route::resource('column','ColumnController');

	//微博模块
	Route::resource('wb','WbController');

	//公告模块
	Route::resource('notice','NoticeController');

	//友情链接模块
	Route::resource('friend_link','Friend_linkController');

	//配置模块
	Route::resource('config','ConfigController');

});
