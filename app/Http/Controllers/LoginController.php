<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function admin_login(){
        return view('login');
    }
}
