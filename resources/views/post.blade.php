{{-- @dd($post) --}}
@extends('layouts/main')

@section('container')

    <article class="mb-5">
        <h1><a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a></h1>
        <h3>By: {{ $post['author'] }}</h3>
        <p>{{ $post['body'] }}</p>
    </article>
    <a href="/blog">Back To Blog</a>

@endsection
