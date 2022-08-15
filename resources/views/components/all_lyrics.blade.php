@extends('layouts.app')
@section('keywords')
    Myanmar Song Lyric | Kachin Song Lyrics
    @foreach ($posts as $post)
        {{ $post->title }}
    @endforeach
@endsection

@section('title')
    All lyric
@endsection
@section('content')
    <div class="row">

        @foreach ($posts as $post)
            <div class="col-md-3 d-flex justify-content-center mb-3">

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-disc"></i> {{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2"><i class="bi bi-mic-fill"></i> {{ $post->meta['description'] }}</h6>

                        <div class="d-grid">
                            <a href="{{ route('lyric.show', $post->slug) }}"
                                class="btn btn-outline-primary stretched-link"><i class="bi bi-chevron-right"></i>View
                                Lyric</a>
                        </div>

                    </div>
                </div>

            </div>
        @endforeach


    </div>
@endsection
