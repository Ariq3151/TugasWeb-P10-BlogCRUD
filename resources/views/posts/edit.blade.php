@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

<h1>Edit Post</h1>

@if ($errors->any())
    <div class="error">
        <strong>Terjadi kesalahan:</strong>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form
    method="POST"
    action="{{ route('posts.update', $post) }}"
>

    @csrf
    @method('PUT')

    <label>Judul</label>

    <input
        type="text"
        name="title"
        value="{{ old('title', $post->title) }}"
    >

    @error('title')
        <div class="error">{{ $message }}</div>
    @enderror

    <label>Isi Post</label>

    <textarea
        name="body"
        rows="8"
    >{{ old('body', $post->body) }}</textarea>

    @error('body')
        <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit">
        Update
    </button>

</form>

@endsection