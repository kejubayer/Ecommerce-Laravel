@extends('layouts.backend')

@section('main')

    <div class="card mt-4">
        <div class="card-header text-center">
            My Profile
        </div>
        <div class="card-body">
            <h5 class="card-title">Full Name : {{$user->full_name}}</h5>
            <h5 class="card-title">Email Address : {{$user->email}}</h5>
            <h5 class="card-title">Mobile Number : {{$user->mobile_number}}</h5>
            <h5 class="card-title">Address : {{$user->address}}</h5>
            <a href="{{route('edit_profile')}}" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>

    @stop