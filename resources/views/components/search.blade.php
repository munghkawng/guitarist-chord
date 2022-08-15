@extends('layouts.app')
@section('title')
    Search Results
@endsection
@section('content')
    <div class="row">
        @foreach ($songs as $song)
            <div class="col-md-3 d-flex justify-content-center mb-3">

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-3 fw-bold"><i class="bi bi-disc"></i> <i class="fa-solid fa-music"></i>
                            {{ $song->title }}</h5>
                        <h6 class="card-subtitle mb-2"><i class="bi bi-mic-fill"></i><i class="fa-solid fa-microphone"></i>
                            {{ $song->summary }}</h6>

                        <div class="d-grid">
                            <a href="{{ route('lyric.show', $song->slug) }}"
                                class="btn btn-outline-primary stretched-link rounded-pill"><i
                                    class="bi bi-chevron-right"></i>View
                                Lyric</a>
                        </div>

                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
