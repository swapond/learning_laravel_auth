<div class="container">
    <h1>Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</div>
