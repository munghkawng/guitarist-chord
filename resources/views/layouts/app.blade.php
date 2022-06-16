<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Guitarist Chord | Official Myanmar Song Lyrics & Guitar Chords">
    <meta name="description" content="Guitaristchord is a place for finding myanmar song lyrics with guitar chords">
    <meta name="keywords" content="@yield('keywords')">


    <title>@yield('title') | Guitarist Chord Myanmar</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    {{-- style --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/html-chords.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/customstyle.css') }}" />

    <script src="https://kit.fontawesome.com/80dad50357.js" crossorigin="anonymous"></script>


    {{-- script --}}
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/html-chords.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        body {
            font-family: 'Roboto Mono', monospace;
        }
    </style>
</head>

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

</body>

</html>
