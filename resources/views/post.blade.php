{{-- @dd($post) --}}
@extends('layouts/main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h1>{{ $post->title }}</h1>
            <p class="card-text"><small class="text-muted">By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In. <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small></p>
            {{-- {!! $var !!} untuk menampilkan data tanpa escape, tag html dijalankan --}}
            {{-- <img src="img/lee.jpg" width="1200" height="400" class="card-img-top" alt="{{ $post->category->name }}"> --}}
            {{-- <img src="https://source.unsplash.com/120x40?{{ $post->category->name }}" class="card-img-top py-3" alt="{{ $post->category->name }}"> --}}
            <img src="img/{{ $post->category->slug }}" class="card-img-top py-3" alt="{{ $post->category->slug }}">
            <article class="mb-5">
                {!! $post->body !!}
            </article>
            <h5><a class="text-decoration-none btn btn-primary" href="/blog">Back to blog</a></h5>
        </div>
    </div>
</div>


@endsection
