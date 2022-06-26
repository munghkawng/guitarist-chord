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
            <div class="card mb-3 bg-light" style="max-width: 540px;">
                <div class="row g-0">
                    @if ($song->featured_image)
                        <div class="col-md-4">
                            <img src="{{ asset($song->featured_image) }}" class="img-fluid rounded-circle"
                                alt="{{ $song->summary }}">
                        </div>
                    @endif
                    <div class="col-md-8">
                        <div class="card-body ">
                            <h4 class="card-title text-info">{{ $song->title }}</h4>
                            <p>Artist:<a
                                    href="{{ route('show.song', $song->tags[0]->slug) }}">{{ $song->summary }}</a></p>
                        </div>
                    </div>
                </div>
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
