@extends('layouts.app')
@section('meta-description')
    @foreach ($artists as $artist)
        {{ $artist->name }},
    @endforeach
@endsection
@section('title')
    Myanmar Song Chords | Guitarist Chord
@endsection
@section('content')
    <div class="row">
        @foreach ($artists as $artist)
            <div class="col-md-3 text-center mb-3">
                <a href="{{ route('show.song', $artist->slug) }}"
                    class="btn btn-primary btn-lg rounded-pill">{{ $artist->name }}</a>


            </div>
        @endforeach

    </div>
@endsection
