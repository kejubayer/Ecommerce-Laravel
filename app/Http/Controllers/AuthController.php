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
            'address' => '',
            'password' => 'required|min:6|confirmed'
        ]);

        $data = [
            'full_name' => $request->input('full_name'),
            'email' => strtolower($request->input('email')),
            'mobile_number' => $request->input('mobile_number'),
            'address' => $request->input('address'),
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

        $data['user']= auth()->user();

        return view('backend.profile',$data);
    }

    public function showEditProfile(){

        $data['user']= auth()->user();

        return view('backend.edit_profile',$data);
    }

    public function updateProfile(Request $request){
        //validation
        $user=optional(auth()->user());
        $this->validate($request,[
            'full_name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user ->id,
            'mobile_number' => 'required|min:6|max:14|unique:users,mobile_number,'. $user->id,
            'address' => 'required',
            ]);
        $inputs=$request->except(['_token']);
        $user->update($inputs);
        $this->setSuccessMessage('Profile Updated');
        return redirect()->back();
    }

    public function updatePassword(Request $request){
        $user=optional(auth()->user());
        $this->validate($request,[
            'password' => 'required|min:6|confirmed',
            'old_password'=>'required'
        ]);

        $credentials = [
            'email' => $user->email,
            'password'=>$request->input('old_password')
        ];
        if (auth()->attempt($credentials)){
            $user->update([
               'password'=>bcrypt($request->input('password'))
            ]);
            $this->setSuccessMessage('Password changed successfully .');
            return redirect()->back();
        }
        $this->setErrorMessage('Old password id wrong .');
        return redirect()->back();
    }

    public function logout(){
        auth()->logout();
        $this->setSuccessMessage('User has been logout');
        return redirect()->route('login');
    }

}
