<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Index_users_login;
use App\Model\Data_users_register;

class LoginController extends Controller
{
    public function index(Request $request)
    {	
    	return view('home.login');
    }

    public function dologin(Request $request)
    {

    	$name = $request->input('name');
    	 $pwd = $request->input('pwd');

    	// Index_users_login::where('login_name','like','%'.$name.'%');
    	//查询数据库中的所有数据
    	$list = Index_users_login::all();
    	// 遍历输出用户名并判断
    	foreach ($list as $v) {
    	if($v->login_name == $name && $v->password == $pwd)
    	{
    		echo '登录成功';
    	}else{
    		echo '登录失败';
    		}
		}	
    		 	
	}  


        public function register()

    {
    	return view('home.register');
    }
    	public function doregister(Request $request)
    	{

    		 $tel = $request->input('telphone');
    	  	$pwd = $request->input('pwd');

             $time = date("Y-m-d H:i:s");
             

   		     $flight = new Data_users_register;
    		
          	$flight->tel = $request->telphone;
          	$flight->password = $request->pwd;
          	$flight->created_at = $time;

        	 $flight->save();
    	}
 }

