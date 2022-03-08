@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h1 class="text-center mt-3">{{ $post->title }}</h1>
            {{-- {!! $var !!} untuk menampilkan data tanpa escape, tag html dijalankan --}}
            <a href="/dashboard/posts" class="btn btn-primary">Back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                {{-- mengganti method ke delete, karna form hanya bisa get dan post --}}
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are u sure?')">Delete</span></button>
            </form>

            @if ($post->image)
            <div style="max-height: 400px; overflow:hidden">
                <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top my-3" alt="{{ $post->category->slug }}">
            </div>
            @else
            <img src="/img/{{ $post->category->slug }}.jpg" width="1200" height="400" class="card-img-top my-3" alt="{{ $post->category->slug }}">
            @endif

            <article class="mb-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection
