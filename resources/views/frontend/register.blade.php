@extends('layouts.frontend')

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="well">
                    <h2 class="text-center col-mt-4">Register Your Account</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-{{session('type')}}">
                            {{session('message')}}
                        </div>
                    @endif

                    <form action="{{route('register')}}" method="post" class="form form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="inputFullName">Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="inputFullName"
                                   placeholder="Full name" value="{{old('full_name')}}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail"
                                   placeholder="Email" value="{{old('email')}}">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputMobileNumber">Mobile Number</label>
                                <input type="text" name="mobile_number" class="form-control" id="inputMobileNumber"
                                       placeholder="Mobile Number" value="{{old('mobile_number')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Address</label>
                                <input type="text" name="address" class="form-control" id="inputAddress"
                                       placeholder="Banani, Dhaka, Bangladesh." value="{{old('address')}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="confirm_password" placeholder="Confirm Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @stop