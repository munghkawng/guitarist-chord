@extends('layouts.app')
@section('meta-description')
    {{ $song->meta['description'] }}
@endsection
@section('title')
    {{ $song->title }} Chord - {{ $song->summary }}
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            {{-- Share Button --}}
            <a href="mailto:?subject={{ $song->title }} - {{ $song->meta['description'] }}"
                class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-envelope"></i></a>
            @foreach ($socialShareButtons as $social => $value)
                <a href="{{ $value }}" class="btn btn-outline-primary btn-sm mb-2" target="_blank"><i
                        class="fa-brands fa-{{ $social }}"></i></a>
            @endforeach

            <h3 class="fw-bold mb-3">{{ $song->title }}</h4>
                <div class="mb-3">
                    <a href="{{ route('show.song', $song->tags[0]->slug) }}" class="bg-black p-2 text-white">
                        {{ $song->summary }}</a>
                </div>


                <div class="song">

                    <div class="transposition">

                    </div>
                    {!! $song->body !!}

                </div>
        </div>
        <div class="col-md-4">
            <p class="lead text-center text-info text-uppercase">Related Songs</p>
            @foreach ($randomSong as $suggestedSong)
                <div class="list-group my-2">
                    <a href="{{ route('lyric.show', $suggestedSong->slug) }}"
                        class="list-group-item list-group-item-action">
                        {{ $suggestedSong->title }} - <span class="badge bg-primary">
                            {{ $suggestedSong->summary }}</span>
                    </a>
                </div>
            @endforeach

        </div>

    </div>
@endsection
