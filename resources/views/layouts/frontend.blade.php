<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}</title>

    <!-- CSS -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>

@include('frontend.partials._navbar')

<main role="main">

    @yield('main')

</main>

@include('frontend.partials._footer')
<script src="{{mix('js/app.js')}}"></script>
@yield('js')
</body>
</html>
