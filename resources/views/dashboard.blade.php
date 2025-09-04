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
            @if(Gate::allows('isAdmin'))
                <a href="/super-admin" class="btn btn-success">Super Admin</a>
            @endif

            <a href="{{route('profile', auth()->id())}}" class="btn btn-secondary">Profile</a>
            <a href="{{route('logout')}}" class="btn btn-danger">Logout.</a>
        </div>
    </div>
@endsection
