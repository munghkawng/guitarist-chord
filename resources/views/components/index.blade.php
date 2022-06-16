@extends('layouts.app')
@section('keywords')
    @foreach ($posts as $post)
        <span>{{ $post->title }},</span>
    @endforeach
@endsection
@section('author')
    @foreach ($posts as $post)
        <span>{{ $post->meta['description'] }},</span>
    @endforeach
@endsection
@section('title')
    Guitarist Chord | Official Myanmar Song Lyrics & Guitar Chords
@endsection
@section('content')
    <div class="row">


        @foreach ($posts as $key => $post)
            <div class="col-12 col-md-3 my-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-info"><i class="fa-solid fa-music"></i> {{ $post->title }}</h5>
                        <p class="card-text text-muted"><i class="fa-solid fa-microphone"></i>
                            {{ $post->meta['description'] }}</p>
                        <div class="d-grid">
                            <a href="{{ route('lyric.show', $post->slug) }}" class="btn btn-outline-primary"><i
                                    class="fa-solid fa-guitar"></i> Lyric</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach





        {{ $posts->links('vendor.pagination.bootstrap-4') }}


    </div>
@endsection
