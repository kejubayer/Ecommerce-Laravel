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
            'email' => 'required|email|unique:users,email',
            'mobile_number' => 'required|min:6|max:14|unique:users,mobile_number',
            'address' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $data = [
            'full_name' => $request->input('full_name'),
            'email' => strtolower($request->input('email')),
            'mobile_number' => $request->input('mobile_number'),
            'address' => 'required',
            'password' => bcrypt($request->input('password'))
        ];

        try{
            User::create($data);
            $this->setSuccessMessage('User account created .');

            return redirect()->route('login');
        }catch (Exception $e){
            $this->setErrorMessage($e->getMessage());
            return redirect()->back();
        }
    }

    public function showLogin()
    {
        return view('frontend.login');
    }

    public function processLogin(Request $request){
        //validation
        $this->validate($request,[
           'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        $credentials = $request->except(['_token']);

        if (auth()->attempt($credentials)){
            return redirect()->route('home');
        }
        $this->setErrorMessage('Invalid email or password .');

        return redirect()->back();

    }

    public function showProfile(){
        return view('backend.profile');
    }

    public function logout(){
        auth()->logout();
        $this->setSuccessMessage('User has been logout');
        return redirect()->route('login');
    }

}
