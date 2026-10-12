@extends('layouts.app')

@section('title', $post->title)

@section('content')

<h1>{{ $post->title }}</h1>

<div class="card">
    <p>{{ $post->body }}</p>
</div>

<p>
    <a href="{{ route('posts.edit', $post) }}">
        Edit
    </a>
</p>

<p>
    <a href="{{ route('posts.index') }}">
        Kembali
    </a>
</p>

<form
    method="POST"
    action="{{ route('posts.destroy', $post) }}"
    onsubmit="return confirm('Yakin ingin menghapus post ini?')"
>

    @csrf
    @method('DELETE')

    <button type="submit">
        Hapus
    </button>

</form>

@endsection