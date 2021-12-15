{{-- dump and die, dump: melihat isi variabel, object, array, die: memberhentikan script apapun setelah @dd --}}
{{-- @dd($posts) --}}

@extends('layouts/main')

@section('container')

<h1 class="text-center">{{ $title }}</h1>
<div class="row justify-content-center">
    <div class="col-md-6 mb-4">
        <form action="/blog" method="GET">
            <div class="input-group mb-3">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text" class="form-control" name="search" placeholder="Search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/120x40?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    {{-- <img src="img/lee.jpg" width="1200" height="400" class="card-img-top" alt="{{ $posts[0]->category->name }}"> --}}
    <div class="card-body text-center">
        <h5 class="card-title">{{ $posts[0]->title }}</h5>
        <p class="card-text"><small class="text-muted">By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> {{ $posts[0]->updated_at->diffForHumans() }}</small></p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
</div>
<div class="container">
    <div class="row">

        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.7)">
                    <a href="/blog?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                </div>
                <img src="https://source.unsplash.com/100x100?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                {{-- <img src="img/lee.jpg" width="400" height="400" class="card-img-top" alt="{{ $post->category->name }}"> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text"><small class="text-muted">By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->updated_at->diffForHumans() }}</small></p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>

                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@else
<h1 class="text-center">No Found Posts</h1>
@endif

@endsection
