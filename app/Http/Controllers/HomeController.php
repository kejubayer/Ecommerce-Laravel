<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
        $data['products']=Product::select('id','slug','name','price')->paginate(9);
        return view('frontend.home', $data);
    }

    public function showProductsByCategory($slug){

        $data = [];
        $data['slug']=$slug;

        return view('frontend.category',$data);
    }
}

