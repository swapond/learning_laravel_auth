@extends('layouts.app')
@section('content')
    <div class="container-sm">
        <h1>Dashboard</h1>
        <p>Welcome: {{auth()->user()->name}}</p>

        <code>
            {{auth()->user()}}
        </code>
        <br>
        <br>
        <div>
            <a href="{{route('deep-page')}}" class="btn btn-primary">Go deep.</a>
            <a href="{{route('logout')}}" class="btn btn-danger">Logout.</a>
        </div>
    </div>
@endsection
