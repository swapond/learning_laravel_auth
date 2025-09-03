@extends('layouts.app')

@section('content')
    <div class="container-sm">
        <h1>Deep Page</h1>
        <div>
            <a href="{{route('dashboard')}}" class="btn btn-primary">Go dashboard.</a>
            <a href="{{route('logout')}}" class="btn btn-danger">Logout.</a>
        </div>
    </div>

    {{--    in the view we can use gate to optionally display something on the page --}}
    @if(Gate::allows('isAdmin'))
        <div class="alert alert-info mt-4">
            You are an admin.
        </div>
    @endif

    {{--    Or --}}
    @can('isAdmin')
        <div class="alert alert-info mt-4">
            You are an admin.
        </div>
    @endcan

    {{--    Vice-versa --}}
    @cannot('isAdmin')
        <div class="alert alert-warning mt-4">
            You are not an admin.
        </div>
    @endcannot

@endsection
