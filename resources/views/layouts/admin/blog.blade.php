<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Viva Andaz | Admin')</title>

    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
{{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

<!-- Favicon icon -->
    <link rel="icon" href="{{ asset("admin/assets/images/favico.ico")}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset("admin/assets/fonts/fontawesome/css/fontawesome-all.min.css")}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset("admin/assets/plugins/animation/css/animate.min.css")}}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset("admin/assets/css/style.css")}}">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    @stack('css')
</head>
<body>
<div id="app">

    <x-menu-admin></x-menu-admin>

    <x-header-admin :username="auth()->user()->username"></x-header-admin>

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <main class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

<!-- Required Js -->
<script src="{{asset("admin/assets/js/vendor-all.min.js")}}"></script>
<script src="{{asset("admin/assets/plugins/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("admin/assets/js/pcoded.min.js")}}"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.onload = function (){
        let elementUpgradeToPro = document.getElementsByClassName("fixed-button active")[0];
        elementUpgradeToPro.parentNode.removeChild(elementUpgradeToPro);
        document.title = 'Viva Andaz'
    }

</script>

@stack('js')
</body>
</html>
