@extends('layouts.app')
@section('keywords')
    Kachin Song Lyric,
    Myanmar Song Lyric,
    guitaristchord.com
@endsection
@section('title')
    Guitarist Chord | Official Myanmar Song Lyrics & Guitar Chords
@endsection

@section('content')
    <div class="row">

        @foreach ($posts as $key => $post)
            <div class="col-sm-6 col-md-3 d-flex justify-content-center my-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-info fw-bold"><i class="fa-solid fa-music"></i> {{ $post['title'] }}</h5>
                        <p class="card-text text-muted"><i class="fa-solid fa-microphone"></i>
                            {{ $post['summary'] }}</p>
                        <div class="d-grid">
                            <a href="{{ route('lyric.show', $post['slug']) }}"
                                class="btn btn-outline-primary rounded-pill"><i class="fa-solid fa-guitar"></i> Lyric</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
@endsection
