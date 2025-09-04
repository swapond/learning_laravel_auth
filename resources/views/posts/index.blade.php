@extends('layouts.app')

<div class="container-sm mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Posts</h1>
        <a href="" class="btn btn-primary">+ Create Post</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped table-hover table-bordered mb-0">
                <thead class="table-dark">
                <tr>
                    <th scope="col" style="width: 5%;">ID</th>
                    <th scope="col" style="width: 20%;">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col" style="width: 15%;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->body, 50) }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-warning">View</a>
                                @can('update', $post)
                                    <a href="{{route('posts.edit', $post->id)}}"
                                       class="btn btn-sm btn-warning">Edit</a>
                                @else
                                    <span class="btn btn-sm btn-warning disabled"
                                          style="pointer-events: none;">Edit</span>
                                @endcan
                                <form action="" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No posts found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
