{{-- dump and die, dump: melihat isi variabel, object, array, die: memberhentikan script apapun setelah @dd --}}
{{-- @dd($posts) --}}

@extends('layouts/main')

@section('container')

    <h1>Category {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mt-5">
            <h1>{{ $post->title }}</h1>
            <h3>By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a></h3>
            <h3> In: <a href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></h3>
            <p>{{ $post->excerpt }}</p>
        </article>
        <a class="text-decoration-none" href="/blog/{{ $post->slug }}">
            <h5>Read More >></h5>
        </a>
    @endforeach

@endsection
