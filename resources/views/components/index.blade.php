@extends('layouts.app')
@section('title')
Guitarist Chord | Myanmar Song Lyrics & Guitar Chords
@endsection
@section('content')
<h5 class="py-3 ms-1 text-uppercase d-flex justify-content-center justify-content-md-start">Trending Lyrics</h5>
<div class="row">
{{--    @dd($posts)--}}
    <table class="table table-hover">
        <tbody>
        @foreach($posts as $key=> $post)
            <tr>
                <th>{{$posts->firstItem()+$key}}</th>
                <td><h4>{{$post->title}}</h4></td>
                <td>{{$post->meta['description']}}</td>
                <td></td>
            </tr>
        @endforeach

        </tbody>

    </table>
    {{$posts->links()}}

    {{-- @foreach ($posts as $post)
    <div class="col-md-3 mb-3">
        <div class="card shadow-lg pb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title mb-3 fw-bold  text-info">
                    {{ $post->title }}
    </h5>
    <h6 class="card-subtitle mb-2 text-muted"><i class="bi bi-mic-fill"></i> {{ $post->meta['description'] }}
    </h6>

    <div class="d-grid">
        <a href="{{ route('lyric.show', $post->slug) }}" class="btn btn-outline-primary stretched-link"><i class="bi bi-file-music-fill"></i> View
            Lyric</a>
    </div>

</div>
</div>
</div>
@endforeach --}}

</div>

{{-- <div class="d-flex justify-content-center">
    {{$posts->links()}}
</div> --}}

@endsection
