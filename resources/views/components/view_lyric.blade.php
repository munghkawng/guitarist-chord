@extends('layouts.app')
@section('title')
    {{$song->title}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4 class="fw-bold"><i class="bi bi-disc-fill"></i> {{$song->title}}</h4>
            <p><i class="bi bi-mic-fill"></i> Artist:<span class="fw-bold">{{$song->meta['description']}}</span></p>

            <div class="song">

                <div class="transposition"></div>
                {!! $song->body !!}
            </div>
        </div>
        <div class="col-md-6 embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315"  class="embed-responsive-item" src="{{"https://www.youtube.com/embed/".$song->meta['canonical_link']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>


@endsection
