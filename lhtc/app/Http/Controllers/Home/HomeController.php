<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Data_column;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
    	$column = Data_column::all();
    	return view('home.index',['column'=>$column]);	
    }

    public function login()
    {	
       return view('home.login');
    }

}
