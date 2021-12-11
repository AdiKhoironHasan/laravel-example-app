{{-- dump and die, dump: melihat isi variabel, object, array, die: memberhentikan script apapun setelah @dd --}}
{{-- @dd($posts) --}}

@extends('layouts/main')
@section('container')
    <h1>Lihat <a class="text-decoration-none" href="/categories">Post Category</a></h1>
    @foreach ($posts as $post)
        <article class="mt-5">
            <h1>{{ $post->title }}</h1>
            <h3>By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a></h3>
            <h3> In: <a href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></h3>
            <p>{{ $post->excerpt }}</p>
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                <h5>Read More >></h5>
            </a>
        </article>
    @endforeach

@endsection
