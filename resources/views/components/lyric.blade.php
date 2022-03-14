@extends('layouts.app')
@section('title')
    search
@endsection


@section('content')
    <div class="row my-5">


        @foreach($songs->posts as $key=>$song)

            <div class="col-md-4 text-center mb-3">
                <a href="{{route('lyric.show',$song->slug)}}" class="text-decoration-none">
                    <div class="card shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase text-primary"><i class="bi bi-disc-fill text-black"></i> {{$song->title}}</h5>
                        </div>
                    </div>
                </a>


            </div>
        @endforeach
    </div>
@endsection
