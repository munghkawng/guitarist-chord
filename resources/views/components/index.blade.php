@extends('layouts.app')
@section('title')
Guitarist Chord | Myanmar Song Lyrics & Guitar Chords
@endsection
@section('content')
<div class="px-5 mb-3">

    <table class="table table">
        <tbody>
            @foreach($posts as $post)
            <tr style="transform: rotate(0);">
                <th scope="row"><a href="{{route('lyric.show',$post->slug)}}" class="stretched-link"></a>{{$loop->iteration}}</th>
                <td>
                    <h5>{{$post->title}}</h4>
                </td>
                <td>{{$post->meta['description']}}</td>
                <td>
                    @mdo</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <a href="{{ route('lyrics') }}" class="btn btn-lg btn-primary ">Explore Chords</a>
</div>
</div> -->
<h5 class="py-3 ms-1 text-uppercase d-flex justify-content-center justify-content-md-start">Trending Lyrics</h5>
<div class="row">
    @foreach ($posts as $post)
    <div class="col-sm-6 col-md-3 d-flex justify-content-center mb-3">
        <div class="list-group">
            <a href="{{route('lyric.show',$post->slug)}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$post->title}}</h5>

                </div>
                <p class="mb-1">{{Str::words("$post->summary",7,'...')}}</p>
                <small>{{$post->meta['description']}}</small>
            </a>

        </div>


    </div>
    @endforeach

</div>
<div class="d-flex justify-content-center  justify-content-md-end">
    {{$posts->links()}}
</div>

@endsection