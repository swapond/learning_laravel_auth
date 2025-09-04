@extends('layouts.app')
<div class="container-sm">
    {{--    post show--}}
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
</div>
