@extends('layouts.frontend')

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h2 class="text-center col-mt-4">Login to your account</h2>
                @if(session()->has('message'))
                    <div class="alert alert-{{session('type')}}">
                        {{session('message')}}
                    </div>
                @endif
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                           placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
        </div>

    </div>
@stop