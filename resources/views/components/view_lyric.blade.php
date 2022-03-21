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
        <div class="col-md-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JujH3cULH-Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="jtab">{{$song->meta['canonical_link']}}</div>
        </div>
    </div>


@endsection
