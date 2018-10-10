<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    <div id="app">
        <div class="wrapper">
            @auth()
            @include('layouts.sidebar')
            @endauth
            <div id="content">
                @include('layouts.navbar')
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    @if(Session::has('success'))
    <script>
        swal({
            type: "success",
            title: "{{Session::get('success')}}"
        })
    </script>
    @endif
    @yield('scripts')
</body>

</html>