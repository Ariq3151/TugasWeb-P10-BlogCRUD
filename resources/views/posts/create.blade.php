@extends('layouts.app')

@section('title', 'Buat Post')

@section('content')

<h1>Buat Post Baru</h1>

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

<form method="POST" action="{{ route('posts.store') }}">

    @csrf

    <label>Judul</label>

    <input
        type="text"
        name="title"
        value="{{ old('title') }}"
    >

    @error('title')
        <div class="error">{{ $message }}</div>
    @enderror

    <label>Isi Post</label>

    <textarea
        name="body"
        rows="8"
    >{{ old('body') }}</textarea>

    @error('body')
        <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit">
        Simpan
    </button>

</form>

@endsection