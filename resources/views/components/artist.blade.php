@extends('layouts.app')
@section('keywords')
    Myanmar Song Lyric | Kachin Song Lyrics
    @foreach($artists as $artist)
        <span>{{$artist->name}}</span>
    @endforeach
@endsection

@section('title')
    Artists @ guitarist chord
@endsection
@section('content')
    <div class="row row-cols-2 row-cols-md-3 g-4">
        @foreach($artists as $artist)
            <div class="col">
                <div class="card text-center bg-white border-0 font-weight-bolder">

                    <div class="card-body bg-primary text-dark">
                        <a href="{{route('show.song',$artist->slug)}}"
                           class="text-decoration-none text-white   text-primary stretched-link text-uppercase">{{$artist->name}}</a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
@endsection
