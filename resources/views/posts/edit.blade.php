@extends('layouts.app')
{{auth()->user()->id ?? 'no user'}}<br>
id:{{$post->user->id}}
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}"
               required>
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" id="body" name="body" rows="5" required>{{ old('body', $post->body) }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
</form>
