@extends('layouts.app')
@section('title')
    search results
@endsection
@section('content')
    <div class="row">
        @foreach($data as $song)
            <div class="col-md-3 d-flex justify-content-center">

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-disc"></i> {{$song->title}}</h5>
                        <h6 class="card-subtitle mb-2"><i class="bi bi-mic-fill"></i> {{$song->meta['description']}}</h6>
                        <p class="card-text">{{$song->summary}}</p>
                        <div class="d-grid">
                            <a href="{{route('lyric.show',$song->slug)}}" class="btn btn-outline-primary stretched-link"><i class="bi bi-chevron-right"></i>View Lyric</a>
                        </div>

                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
