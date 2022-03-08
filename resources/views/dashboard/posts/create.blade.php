@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Posts</h1>
</div>
<form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
    @csrf
    <div class=" mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}" required autofocus>
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ old('slug') }}" required>
        @error('slug')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id" id="category_id">
            @foreach ($categories as $category)
            {{-- === perbandingan beserta tipe data
                 == perbandingan tanpa yipe data --}}
            @if (old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="imagePreview()">
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Body</label>
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
        <small class="text-danger">
            {{ $message }}
        </small>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
</form>

<script>
    // ambil dari id
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    // jalan setelah selesai input, onkeyup = jalan dari tiap inputan (char)
    title.addEventListener("change", function() {
        fetch('/dashboard/posts/getslug?title=' + title.value)
            // menamngkap response dari fungsi createSlug di DashboardPostController
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });


    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })


    imagePreview() {
        const image = document.querySelector('#image'); //id
        const imgPreview = document.querySelector('.img-preview'); //class

        imgPreview.style.display = block;

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>

@endsection
