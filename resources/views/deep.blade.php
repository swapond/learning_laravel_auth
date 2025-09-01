@extends('layouts.app')

@section('content')
    <div class="container-sm">
        <h1>Deep Page</h1>
        <div>
            <a href="{{route('dashboard')}}" class="btn btn-primary">Go dashboard.</a>
            <a href="{{route('logout')}}" class="btn btn-danger">Logout.</a>
        </div>
    </div>

    @if(auth()->check())
        Logged in.
        {{Auth::user()->name}}
    @endif
@endsection
