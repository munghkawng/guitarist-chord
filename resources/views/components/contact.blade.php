@extends('layouts.app')
@section('title')
    Contact Us | GuitaristChord
@endsection

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header h3 text-center text-primary">
                    CONTACT US
                </div>
                <div class="card-body">
                    <form action="{{ route('form.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="fullName" class="form-label">FullName<span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control shadow-none @error('fullName') is-invalid @enderror "
                                id="fullName" name="fullName">
                            @error('fullName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject <span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control shadow-none @error('subject') is-invalid @enderror"
                                id="subject" name="subject">
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message<span class="text-danger">
                                    *</span></label>
                            <textarea class="form-control shadow-none @error('message') is-invalid @enderror" id="message" rows="10"
                                name="message" placeholder="drop message"></textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="uploaderEmailAddress" class="form-label">Email<span class="text-danger">
                                    *</span></label>
                            <input type="email"
                                class="form-control shadow-none @error('uploaderEmail') is-invalid @enderror"
                                id="uploaderEmailAddress" name="uploaderEmail" placeholder="Enter Your Email">
                            @error('uploaderEmail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="6LdJ0DIhAAAAAHyeJphVhq34lnSL4JqFIudQ-YDK"></div>
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
