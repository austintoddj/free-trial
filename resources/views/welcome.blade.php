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
<div id="app">
    <div class="cta text-center">
        <h1>Get 3 free downloads</h1>
        <p class="lead">Start your <span class="font-weight-bold">7 day trial</span> to access thousands of curated photos, fonts, graphics and more to deliver quality designs faster.</p>
    </div>

    <verify-email-component></verify-email-component>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
