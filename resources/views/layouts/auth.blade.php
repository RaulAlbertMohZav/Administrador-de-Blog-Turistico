<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset("admin/assets/images/favico.ico")}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset("admin/assets/fonts/fontawesome/css/fontawesome-all.min.css")}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset("admin/assets/plugins/animation/css/animate.min.css")}}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset("admin/assets/css/style.css")}}">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Required Js -->
    <script src="{{asset("admin/assets/js/vendor-all.min.js")}}"></script>
    <script src="{{asset("admin/assets/plugins/bootstrap/js/bootstrap.min.js")}}"></script>
</body>
</html>
