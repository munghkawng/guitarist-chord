@extends('layouts.app')
@section('title')
Guitarist Chord | Myanmar Song Lyrics & Guitar Chords
@endsection
@section('content')
<h5 class="py-3 ms-1 text-uppercase d-flex justify-content-center justify-content-md-start">Trending Lyrics</h5>
<div class="row">
    @foreach ($posts as $post)
    <div class="col-sm-6 col-md-3 d-flex justify-content-center mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text text-muted"><i class="fa-solid fa-guitar"></i> {{$post->meta['description']}}</p>
                <a href="{{route('lyric.show',$post->slug)}}" class="btn btn-primary">View Lyrics</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
<div class="d-flex justify-content-center">
    {{$posts->links()}}
</div>

@endsection