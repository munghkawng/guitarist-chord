@extends('layouts.app')
@section('title')
    Home | Guitarist Chord
@endsection
@section('content')
    <div class="px-5 mb-3 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold"><i class="bi bi-music-note"></i>Guitarist</h1>
            <div class="col-md-8 fs-4 mb-3">
                <cite>Sometimes you stumble across a few chords that put you in a reflective place</cite>
            </div>
            <a href="{{ route('lyrics') }}" class="btn btn-lg btn-primary ">Explore Chords</a>
        </div>
    </div>
    <h5 class="py-3 ms-1 text-uppercase d-flex justify-content-center justify-content-md-start">Trending Lyrics</h5>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-3 d-flex justify-content-center mb-3">

                <div class="card shadow-lg pb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-3 fw-bold text-uppercase text-danger"><i class="bi bi-disc"></i>
                            {{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2"><i class="bi bi-mic-fill"></i> {{ $post->meta['description'] }}
                        </h6>

                        <div class="d-grid">
                            <a href="{{ route('lyric.show', $post->slug) }}"
                                class="btn btn-outline-primary stretched-link"><i class="bi bi-chevron-right"></i> View
                                Lyric</a>
                        </div>

                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
