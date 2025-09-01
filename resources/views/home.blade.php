@extends('layouts.app')

@section('content')
    <div class="container-md mt-4">
        <h1>Laravel Authentication</h1>
        <a href="{{route('register.get')}}" class="btn btn-primary">Registration</a>
        <a href="{{route('login.get')}}" class="btn btn-primary">Login</a>
    </div>
@endsection
