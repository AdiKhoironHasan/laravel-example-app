{{-- dump and die, dump: melihat isi variabel, object, array, die: memberhentikan script apapun setelah @dd --}}
{{-- @dd($posts) --}}

@extends('layouts/main')
@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="mt-5">
            <h1>{{ $post->title }}</h1>
            <h3>By: <a href="/authors/{{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a>
            </h3>
            <h3> In: <a href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a>
            </h3>
            <p>{{ $post->excerpt }}</p>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                <h5>Read More >></h5>
            </a>
        </article>
    @endforeach

@endsection
