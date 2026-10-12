<div class="card">

    <h2>{{ $post->title }}</h2>

    <p>
        {{ Str::limit($post->body, 150) }}
    </p>

    <a href="{{ route('posts.show', $post) }}">
        Baca selengkapnya
    </a>

</div>