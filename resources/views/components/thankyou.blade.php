@extends('layouts.app')

@section('content')
@if(session('success'))
<div class="px-4 pt-5 text-center">
    <i class="fa-solid fa-circle-check fa-5x text-success mb-2"></i>
    <h1 class="display-4 fw-bold">Thank You</h1>
    <p class="lead mb-4">{{session('success')}}</p>
</div>
@endif
@endsection