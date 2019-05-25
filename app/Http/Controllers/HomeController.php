<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
        return view('frontend.home');
    }

    public function showProductsByCategory($slug){

        $data = [];
        $data['slug']=$slug;

        return view('frontend.category',$data);
    }
}

