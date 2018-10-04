<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div id="app">
        <div class="wrapper">
            @include('layouts.sidebar')
            <div id="content">
                @include('layouts.navbar')
                @section('content')
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>