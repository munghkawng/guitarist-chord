@extends('layouts.app')
@section('meta-description')
    {{ $song->meta['description'] }}
@endsection
@section('title')
    {{ $song->title }} Chord - {{ $song->summary }}
@endsection
@section('content')
    {{-- @dd($song->meta['canonical_link']) --}}
    <div class="row">
        <div class="col-12 col-md-8">
            {{-- Share Button --}}
            <a href="mailto:?subject={{ $song->title }} - {{ $song->meta['description'] }}"
                class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-envelope"></i></a>
            @foreach ($socialShareButtons as $social => $value)
                <a href="{{ $value }}" class="btn btn-outline-primary btn-sm mb-2" target="_blank"><i
                        class="fa-brands fa-{{ $social }}"></i></a>
            @endforeach

            <h4 class="fw-bold mb-3">{{ $song->title }}</h4>
            <div class="mb-3">
                <a href="{{ route('show.song', $song->tags[0]->slug) }}" class="bg-black text-white p-2">
                    {{ $song->summary }}</a>

                <!-- Button trigger modal -->
                @if ($song->meta['canonical_link'] != null)
                    <button type="button" class=" bg-black btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa-solid fa-play"></i> Play
                    </button>
                @endif
            </div>
            <!-- Modal -->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">{{ $song->title }}</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"data-bs-dismiss="modal" aria-label="Close">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" width="100%" height="450"
                                    src='https://www.youtube.com/embed/{{ $song->meta['canonical_link'] }}'
                                    title="{{ $song->title }}" frameborder="0" id="songvideo" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="song">

                <div class="transposition">

                </div>
                {!! $song->body !!}

            </div>
        </div>
        <div class="col-md-4">
            <p class="lead text-center text-info text-uppercase">Related Songs</p>
            @foreach ($randomSong as $suggestedSong)
                <div class="list-group my-2">
                    <a href="{{ route('lyric.show', $suggestedSong->slug) }}"
                        class="list-group-item list-group-item-action">
                        {{ $suggestedSong->title }} - <span class="badge bg-primary">
                            {{ $suggestedSong->summary }}</span>
                    </a>
                </div>
            @endforeach

        </div>

    </div>
@endsection

@push('child-scripts')
    <script>
        $(document).ready(function() {
            /* Get iframe src attribute value i.e. YouTube video url
            and store it in a variable */
            var url = $("#songvideo").attr('src');

            /* Assign empty url value to the iframe src attribute when
            modal hide, which stop the video playing */
            $("#exampleModal").on('hide.bs.modal', function() {
                $("#songvideo").attr('src', '');
            });

            /* Assign the initially stored url back to the iframe src
            attribute when modal is displayed again */
            $("#exampleModal").on('show.bs.modal', function() {
                $("#songvideo").attr('src', url);
            });
        });
    </script>
@endpush
