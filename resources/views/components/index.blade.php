@extends('layouts.app')
@section('title')
   Guitarist Chord | Myanmar Song Lyrics & Guitar Chords
@endsection
@section('content')
    <div class="px-5 mb-3 bg-light rounded-3">
        
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold"><i class="fa-solid fa-guitar"></i>GuitaristChord</h1>
            <div class="col-md-8 fs-4 mb-3">
                <cite>Sometimes you stumble across a few chords that put you in a reflective place</cite>
            </div>
            <a href="{{ route('lyrics') }}" class="btn btn-lg btn-primary ">Explore Chords</a>
        </div>
    </div>
    <h5 class="py-3 ms-1 text-uppercase d-flex justify-content-center justify-content-md-start">Trending Lyrics</h5>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-sm-6 col-md-3 d-flex justify-content-center mb-3">
                <div class="list-group">
  <a href="{{route('lyric.show',$post->slug)}}" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$post->title}}</h5>
     
    </div>
    <p class="mb-1">{{Str::words("$post->summary",7,'...')}}</p>
    <small>{{$post->meta['description']}}</small>
  </a>
  
</div>

                
            </div>
        @endforeach
       
   </div>
   <div class="d-flex justify-content-center  justify-content-md-end">
       {{$posts->links()}}
   </div>
       
@endsection
