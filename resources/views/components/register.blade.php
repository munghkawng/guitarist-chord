@extends('layouts.app')
@section('title')
    Create Account
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card" style="width: 40rem;">

                <div class="card-body p-5">
                    <h3 class="card-title text-center mb-3">Create Account</h3>
                    <div class="d-grid gap-2 mb-3">
                        <button class="btn btn-outline-primary btn-lg rounded-pill" type="button"><i
                                class="fa-brands fa-google"></i>
                            Sign Up with
                            Google</button>
                        <button class="btn btn-outline-primary btn-lg rounded-pill" type="button"><i
                                class="fa-brands fa-twitter"></i> Sign Up
                            With
                            Twitter</button>
                        <button class="btn btn-outline-primary btn-lg rounded-pill" type="button"><i
                                class="fa-brands fa-facebook"></i> Sign Up
                            With
                            Facebook</button>
                    </div>
                    <p class="text-center">Already have an account? <a href="/login">login</a></p>

                </div>
            </div>
        </div>
    </div>
@endsection
