<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function getLogin(){
        return view('Admin.Auth.Login');
    }

    public function login(Request $request){
        
    }
}
