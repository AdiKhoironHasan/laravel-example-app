@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h1 class="text-center mt-3">{{ $post->title }}</h1>
            {{-- {!! $var !!} untuk menampilkan data tanpa escape, tag html dijalankan --}}
            <a href="/dashboard/posts" class="btn btn-primary">Back</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
            <img src="/img/{{ $post->category->slug }}.jpg" width="1200" height="400" class="card-img-top my-3" alt="{{ $post->category->slug }}">
            <article class="mb-5">

                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection
