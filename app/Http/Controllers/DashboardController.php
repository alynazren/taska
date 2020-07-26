<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
    	
    	return view('admin.dashboard')->with('active','dashboard');
    }

    public function panel(){

    	return view('admin.dashboard')->with('active','panel');
    }
}
