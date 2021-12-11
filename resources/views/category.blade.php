{{-- dump and die, dump: melihat isi variabel, object, array, die: memberhentikan script apapun setelah @dd --}}
{{-- @dd($posts) --}}

@extends('layouts/main')

@section('container')

    @foreach ($posts as $post)
        <article class="mb-5">
            <h1><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <h3>By: {{ $post->author }}</h3>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection
