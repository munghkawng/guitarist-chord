@extends('layouts.app')
@section('title')
    {{ $song->title }}
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <h4 class="fw-bold"><i class="bi bi-disc-fill"></i> {{ $song->title }}</h4>
            <p><i class="bi bi-mic-fill"></i> Artist:<span class="fw-bold">{{ $song->meta['description'] }}</span></p>

            <div class="song">

                <div class="transposition">
                 
                </div>
                  {!! $song->body !!}
               
            </div>
        </div>
        <div class="col-md-4">
            <p class="lead text-center text-info text-uppercase">Related Songs</p>
            @foreach($randomSong as $suggestedSong)
            <div class="list-group mb-2">
            <a href="{{route('lyric.show',$suggestedSong->slug)}}" class="list-group-item list-group-item-action " aria-current="true">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Song : {{$suggestedSong->title}}</h5>
            </div>
        <p class="mb-1">Artist <span class="bi bi-play-fill"></span> {{$suggestedSong->meta['description']}}</p>
    
        </a>   
        
        </div>
         @endforeach 
       
        </div>
        
    </div>
@endsection
