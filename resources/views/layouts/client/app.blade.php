<!DOCTYPE HTML>
<html>

<head>
    <title>Viva Andaz</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="icon" href="{{ asset('admin/assets/images/favico.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('client/assets/css/main.css') }}" />
    {{-- <link rel="stylesheet" href="{{asset("client/assets/css/mainbutton.css")}}" /> --}}
    <link rel="stylesheet" href="{{ asset('client/assets/css/fontawesome-all.min.css') }}" />



    <style>
        .whatsapp {
            position: fixed !important;
            width: 60px !important;
            height: 60px !important;
            bottom: 40px !important;
            right: 40px !important;
            background-color: #25d366 !important;
            color: #FFF !important;
            border-radius: 50% !important;
            text-align: center !important;
            z-index: 100 !important;
        }

        .whatsapp-icon {
            margin-top: 20px;
        }

        .pr-css {
            position: relative !important;
        }

        .edit-section-vivaandaz:hover {
            border: 2px solid black;
        }

    </style>
    <noscript>
        <link rel="stylesheet" href="{{ asset('client/assets/css/noscript.css') }}" />
    </noscript>
    @stack('css')
</head>

<body
    class="{{ Route::currentRouteName() === 'home-blog' || Route::currentRouteName() === 'admin.view.home' ? 'homepage' : 'no-sidebar' }} is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        @yield('header')

        @yield('content')

        <a class="whatsapp" href="https://bit.ly/3hUFEYA" target="_blank">
            {{-- <i class="fa fa-whatsapp whatsapp-icon"></i> --}}
            <i class="fa fa-phone whatsapp-icon" aria-hidden="true"></i>
        </a>

        @yield('footer')

    </div>


    <!-- Scripts -->
    <script src="{{ asset('client/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/jquery.dropotron.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/util.js') }}"></script>
    <script src="{{ asset('client/assets/js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('js')
</body>

</html>
