{{--design a super admin dashboard with some button--}}
@extends('layouts.app')
<div class="container-sm">
    <h1>Super Admin Dashboard</h1>
    <p>Welcome Super Admin: {{auth()->user()->name}}</p>
    <br>
    <br>
    <div>
        <a href="{{route('deep-page')}}" class="btn btn-primary">Go deep.</a>
        <a href="{{route('logout')}}" class="btn btn-danger">Logout.</a>
    </div>
</div>
