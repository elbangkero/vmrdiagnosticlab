<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function admin_index(){
        return view('admin.index');
    }
    public function admin_login(){
        return view('login');
    }

    
}
