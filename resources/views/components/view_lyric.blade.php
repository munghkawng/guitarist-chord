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
            <h5 class="fw-bold ms-5">Chord Diagram for original key</h5>
            <div class="jtab">{{$song->meta['canonical_link']}}</div>
        </div>
    </div>


@endsection
