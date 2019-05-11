<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showWelcome(){
        return view('welcome');
    }

    public function showHome(){
        return view('home');
    }
}
