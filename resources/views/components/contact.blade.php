@extends('layouts.app')
@section('title')
    Contact Us | GuitaristChord
@endsection

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header h3 text-center text-primary">
                    Contact Us
                </div>
                <div class="card-body">
                    <form action="{{ route('form.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="fullName" class="form-label">FullName<span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject <span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message<span class="text-danger">
                                    *</span></label>
                            <textarea class="form-control" id="message" rows="10" name="message" placeholder="drop message"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="uploaderEmailAddress" class="form-label">Email<span class="text-danger">
                                    *</span></label>
                            <input type="email" class="form-control" id="uploaderEmailAddress" name="uploaderEmail"
                                placeholder="Enter Your Email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
