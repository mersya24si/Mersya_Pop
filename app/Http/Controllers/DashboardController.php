<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController
{
    public function index (){

        if(!Auth::check()){
			//Redirect ke halaman login
            return redirect()->route('auth.index')->withErrors('Silahkan login dulu!');
		}

        return view('admin.dashboard');
    }
}
