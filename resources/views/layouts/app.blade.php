<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guitarist Chord - @yield('title')</title>
    {{--font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    {{--style--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/html-chords.css')}}" />


    {{--script--}}
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/html-chords.js')}}" defer></script>
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('js/raphael.js')}}" defer></script>
    <script src="{{asset('js/jtab.js')}}" defer></script>

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



</body>
</html>
