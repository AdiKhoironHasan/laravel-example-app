@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Posts</h1>
</div>
<form action="/dashboard/posts" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" name="slug" id="slug">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <select class="form-select" aria-label="Default select example">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Body</label>
        <input id="body" type="hidden" name="body">
        <trix-editor input="body"></trix-editor>
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

</script>

@endsection
