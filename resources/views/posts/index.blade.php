@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

<h1>Blog Laravel</h1>

<x-alert />

<p>
    <a href="{{ route('posts.create') }}">
        + Buat Post Baru
    </a>
</p>

@forelse ($posts as $post)
    <x-card :post="$post" />
@empty
    <div class="card">
        <p>Belum ada post.</p>
    </div>
@endforelse

{{ $posts->links() }}

@endsection