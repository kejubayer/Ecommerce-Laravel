@extends('layouts.frontend')

@section('main')

    <div class="container">
        <form>
            <div class="form-group">
                <label for="inputAddress">Full Name</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Full name">
            </div>
            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputMobileNumber">Mobile Number</label>
                    <input type="text" class="form-control" id="inputMobileNumber" placeholder="Mobile Number">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Dhaka, Bangladesh.">
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>

    @stop