<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title','Dashboard')-{{config('app.name')}}</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{mix('css/backend.css')}}">


</head>
<body>

@include('backend.partials._navbar')

<div class="container-fluid">
    <div class="row">

        @include('backend.partials._sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('main')
        </main>
    </div>
</div>
<script src="{{mix('js/backend.js')}}"></script></body>
</html>
