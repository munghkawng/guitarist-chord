<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="@yield('meta-description')">
    <meta name="robots" content="index,follow">
    <title>@yield('title') | Guitaristchord.com</title>
    {{-- recaptch script --}}


    <meta name="keywords" content="guitaristchord.com,guitaristchord,myanmar songs chords,kachin songs chords">

    {{-- favicon link --}}
    <link rel=“icon” sizes="192x192" href="{{ asset('img/favicon.ico') }}" type=“image/x-icon”>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/apple-touch-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon-180x180.png') }}" />




    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    {{-- style --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/html-chords.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/customstyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">

    {{-- fontawesome js --}}
    <script src="https://kit.fontawesome.com/80dad50357.js" crossorigin="anonymous"></script>


    {{-- script --}}
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('js/jquery.js') }}"></script>
    {{-- guitar chordjs --}}
    <script src="{{ asset('js/html-chords.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<style>
    body {

        font-family: 'Jetbrains Mono';
    }
</style>

<body>

    @include('includes.nav')

    <div class="container min-vh-100">
        @yield('content')
    </div>
    @include('includes.footer')

    <script src="https://apis.google.com/js/platform.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>


    @stack('child-scripts')

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</body>

</html>
