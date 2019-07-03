@extends('layouts.backend')

@section('main')

    <div class="card mt-4">
        <div class="card-header text-center">
            Edit Profile
        </div>
        @include('backend.partials._message')
        <div class="card-body">
            <form action="{{route('edit_profile')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" value="{{$user->full_name}}" class="form-control"
                           id="full_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control"
                           id="email" required>
                </div>
                <div class="form-group">
                    <label for="mobile_number">Mobile Number</label>
                    <input type="text" name="mobile_number" value="{{$user->mobile_number}}" class="form-control"
                           id="mobile_number" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="{{$user->address}}" class="form-control"
                           id="address" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update Profile</button>
            </form>
        </div>
    </div>


    <div class="card mt-4">
        <div class="card-header text-center">
            Change Password
        </div>
        <div class="card-body">
            <form action="{{route('password.update')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control"
                           id="password_confirmation" required>
                </div>
                <div class="form-group">
                    <label for="old_password">Old Password</label>
                    <input type="password" name="old_password" class="form-control" id="old_password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Change Password</button>
            </form>
        </div>
    </div>



@stop