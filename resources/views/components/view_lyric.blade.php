@extends('layouts.app')
@section('title')
{{ $song->title }} By {{$song->meta['description']}}
@guitaristchord.com
@endsection
@section('content')
<div class="row">
    <div class="col-12 col-md-8">
        @foreach($socialShareButtons as $social=>$value)
        <a href="{{$value}}" class="btn btn-outline-primary btn-sm mb-2" target="_blank"><i class="fa-brands fa-{{$social}}"></i></a>
        @endforeach

        <h4 class="fw-bold">{{ $song->title }}</h4>
        <p><i class="fa-solid fa-guitar"></i> Artist:<span class="fw-bold">{{ $song->meta['description'] }}</span></p>

        <div class="song">

            <div class="transposition">

            </div>
            {!! $song->body !!}

        </div>
    </div>
    <div class="col-md-4">
        <p class="lead text-center text-info text-uppercase">Related Songs</p>
        @foreach($randomSong as $suggestedSong)
        <div class="list-group">

            <a href="#" class="list-group-item list-group-item-action">
                {{$suggestedSong->title}} - <span class="text-muted">{{$suggestedSong->meta['description']}}
            </a>
        </div>
        <!-- <div class="list-group mb-2">
          <a href="{{route('lyric.show',$suggestedSong->slug)}}" class="list-group-item list-group-item-action " aria-current="true">
          <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">{{$suggestedSong->title}} - <span class="text-muted">{{$suggestedSong->meta['description']}}</span></h5>
        </div>


      </a>

    </div> -->
        @endforeach

    </div>

</div>
@endsection