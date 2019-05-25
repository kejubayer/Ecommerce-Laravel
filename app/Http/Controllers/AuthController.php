<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('frontend.login');
    }
    public function showRegister(){
        return view('frontend.register');
    }
}
