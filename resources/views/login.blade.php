@extends('layouts.app')
@section('content')
    <div class="container-md mt-4">
        <h1>Login</h1>
        <form method="POST" action="">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
