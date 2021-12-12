{{-- @dd($post) --}}
@extends('layouts/main')

@section('container')

    <article class="mb-5">
        <h1>{{ $post->title }}</h1>
        <h3>By: <a href="/authors/{{ $post->author->username }}"
                class="text-decoration-none">{{ $post->author->name }}</a>
        </h3>
        <h3>In: <a href="/categories/{{ $post->category->slug }}"
                class="text-decoration-none">{{ $post->category->name }}</a>
        </h3>
        {{-- {!! $var !!} untuk menampilkan data tanpa escape, tag html dijalankan --}}
        {!! $post->body !!}
    </article>

    <h5><a class="text-decoration-none" href="/blog">Back to blog</a></h5>

@endsection
