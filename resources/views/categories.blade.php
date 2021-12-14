{{-- dump and die, dump: melihat isi variabel, object, array, die: memberhentikan script apapun setelah @dd --}}
{{-- @dd($posts) --}}

@extends('layouts/main')

@section('container')

<h1>{{ $title }}</h1>

<div class="container">
    <div class="row">

        @foreach ($categories as $category)
        <div class="col">
            <a href="/categories/{{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/100x100?{{$category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3 text-dark" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>

{{-- <ul>
    @foreach ($categories as $category)
    <li>
        <h3><a class="text-decoration-none" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
</li>
@endforeach
</ul> --}}

@endsection
