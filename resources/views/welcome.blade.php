<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Free Trial</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent px-5">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">
            <li class="nav-item">
                <a class="nav-link font-weight-bolder" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bolder" href="#">Sign In</a>
            </li>
            <li class="nav-item pr-2">
                <span class="nav-link">or</span>
            </li>
            <li class="nav-item my-auto">
                <a class="btn btn-primary btn-sm text-white text-uppercase font-weight-bolder" href="#">Join now</a>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent mb-3 pb-5 px-5">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{ url('/') }}"><i class="fas fa-layer-group fa-rotate-90" style="font-size: 35px; color: rgb(66,78,157)"></i></a>
        <div class="input-group" style="width: 500px;">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <input type="text" class="form-control" id="search" placeholder="Search Creative Market Pro">
        </div>
        <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">
            <li class="nav-item pr-3">
                <a class="nav-link font-weight-bolder" href="#">Graphics</a>
            </li>
            <li class="nav-item pr-3">
                <a class="nav-link font-weight-bolder" href="#">Fonts</a>
            </li>
            <li class="nav-item pr-3">
                <a class="nav-link font-weight-bolder" href="#">Templates</a>
            </li>
            <li class="nav-item pr-3">
                <a class="nav-link font-weight-bolder" href="#">Add-ons</a>
            </li>
            <li class="nav-item pr-3">
                <a class="nav-link font-weight-bolder" href="#">Photos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bolder" href="#">Themes</a>
            </li>
        </ul>
    </div>
</nav>

<img src="{{ asset('img/free-trial-blob1.svg') }}" id="blob">
<img src="{{ asset('img/free-trial-halftone-circle.svg') }}" id="halftone">

<div id="app">
    <div class="text-center">
        <h1 class="display-4 font-weight-bolder">Get 3 free downloads</h1>
        <p class="lead py-4">Start your <span class="font-weight-bold">7 day trial</span> to access thousands of curated photos, fonts, graphics and<br> more to deliver quality designs faster.</p>
    </div>

    <verify-email-component></verify-email-component>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
