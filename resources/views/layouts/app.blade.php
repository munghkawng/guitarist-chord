<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <title>@yield('title')</title>
    <meta name="description" content="song lyric and guitar chord finder">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
   
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/html-chords.css') }}" />
    


   

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
    

</body>

</html>
