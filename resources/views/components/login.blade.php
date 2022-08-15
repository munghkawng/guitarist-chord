@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card" style="width: 36rem;">

                <div class="card-body p-5">
                    <h3 class="card-title text-center mb-3">Login</h3>
                    <div class="d-grid gap-3 mb-3">
                        <a href="{{ route('login.google') }}" class="btn btn-outline-primary btn-lg rounded-pill"
                            type="button"><i class="fa-brands fa-google"></i>
                            Continue With
                            Google</a>
                        <a class="btn btn-outline-primary btn-lg rounded-pill" type="button"><i
                                class="fa-brands fa-twitter"></i>
                            Continue With
                            Twitter</a>
                        <a class="btn btn-outline-primary btn-lg rounded-pill" type="button"><i
                                class="fa-brands fa-facebook"></i> Continue With

                            Facebook</a>
                    </div>
                    <p class="text-center">Already have an account? <a href="/register">Register</a></p>

                </div>
            </div>
        </div>
    </div>
@endsection
