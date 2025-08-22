@extends('layouts.app')

@section('content')
    <div class="container-md mt-4">
        <h1>Laravel Authentication</h1>
        <a href="{{route('registration')}}" class="btn btn-primary">Registration</a>
        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
    </div>
@endsection
