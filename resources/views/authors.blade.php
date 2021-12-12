{{-- dump and die, dump: melihat isi variabel, object, array, die: memberhentikan script apapun setelah @dd --}}
{{-- @dd($posts) --}}

@extends('layouts/main')

@section('container')

    <h1>{{ $title }}</h1>

    <ul>
        @foreach ($authors as $author)
            <li>
                <h3><a class="text-decoration-none" href="/authors/{{ $author->username }}">{{ $author->name }}</a>
                </h3>
            </li>
        @endforeach
    </ul>

@endsection
