@extends('layouts.app')
@section('title')
submit song lyric
@ guitaristchord.com
@endsection

@section('content')

<div class="row justify-content-md-center">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header h5 text-center text-primary">
                Fill in the Form below to Request Chord
            </div>
            <div class="card-body">
                <form action="{{route('form.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputSongName" class="form-label">Song Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" id="inputSongName" name="songTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputArtistName" class="form-label">Artist Name <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" id="inputArtistName" name="aritstName" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputLyric" class="form-label">Lyrics <span class="text-danger"> *</span></label>
                        <textarea class="form-control" id="inputLyric" rows="25" name="lyrics" placeholder="Enter Song Lyrics"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="uploaderName" class="form-label">Your Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" id="uploaderName" name="uploaderName" required>
                    </div>
                    <div class="mb-3">
                        <label for="uploaderEmailAddress" class="form-label">Your Email Address<span class="text-danger"> *</span></label>
                        <input type="email" class="form-control" id="uploaderEmailAddress" name="uploaderEmail" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection