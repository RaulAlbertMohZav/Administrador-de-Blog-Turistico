<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Viva Andaz | Admin')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('admin/assets/images/favico.ico') }}" type="image/x-icon">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">

    @stack('css')
</head>

<body>
    <div id="app">
        <v-app>
            {{-- @yield('header') --}}
            {{-- <x-navigation-edit-layout></x-navigation-edit-layout> --}}
            <v-app-bar app color="deep-purple accent-4" dark>
                <v-toolbar-title>Viva Andaz</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-btn href="{{ route('home') }}" class="mx-2" fab dark small color="primary">
                    <v-icon dark>
                        mdi-arrow-left-circle
                    </v-icon>
                </v-btn>
                {{-- href="javascript:history.go(-1)" --}}
            </v-app-bar>
            <v-main>
                <v-container>
                    @yield('content')
                </v-container>
            </v-main>
            @yield('footer')
        </v-app>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('js')
</body>

</html>
