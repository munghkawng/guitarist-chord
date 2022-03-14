@extends('layouts.app')
@section('title')
    artists
@endsection
@section('content')
    <div class="row my-5">
        @foreach($artists as $artist)
        <div class="col-md-3 text-center mb-3 d-flex justify-content-center">
            <a href="{{route('show.song',$artist->slug)}}" class="text-decoration-none">
                <div class="card shadow" style="width: 17rem;">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-primary"><i class="bi bi-disc-fill text-black"></i> {{$artist->name}}</h5>
                    </div>
                </div>
            </a>


        </div>
        @endforeach
    </div>
@endsection
