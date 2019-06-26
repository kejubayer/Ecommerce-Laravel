<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('frontend.register');
    }

    public function processRegister(Request $request)
    {
        //validation
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required|min:6|max:14',
            'password' => 'required|min:6|confirmed',
            'address' => 'required'
        ]);

        $data = [
            'full_name' => $request->input('full_name'),
            'email' => strtolower($request->input('email')),
            'mobile_number' => $request->input('mobile_number'),
            'password' => bcrypt($request->input('password')),
            'address' => 'required'
        ];

        try{
            User::create($data);

            return redirect()->route('login');
        }catch (Exception $e){
            return redirect()->back();
        }

    }

    public function showLogin()
    {
        return view('frontend.login');
    }

}
