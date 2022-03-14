@extends('layouts.app')
@section('title')
    search result
@endsection
@section('content')
    <h1 class="display-1">Hmmm</h1>
    @foreach($songs as $song)
        <p class="display-4 text-info">Look Like we couldn't find any matches of {{$song->title}}</p>
    @endforeach
@endsection
