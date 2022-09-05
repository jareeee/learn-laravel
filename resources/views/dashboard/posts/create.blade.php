@extends('dashboard.layout.dashboard-layout')

@section('contain')

    <form action="/dashboard/posts" method="post" class="mt-2">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 border-bottom">
            <h2>Create a new post</h2>
        </div>
        <div class="mb-3 mt-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" name="title" required>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" id="slug" name="slug" required>
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" value="{{ old('author') }}" id="author" name="author" required>
            @error('author')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-select" name="category_id" id="category_id" >
           @foreach($categories as $category)
            @if(old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected> {{ $category->name   }}</option>
            @else
            <option value="{{ $category->id }}"> {{ $category->name }}</option>
            @endif
           @endforeach
        </select>
        </div>
        <div class="mb-3">
            <label for="photos" class="form-label">Add photo with url</label>
            <input id="photos" type="url" class="form-control @error('photos') is-invalid @enderror" value="{{ old('photos') }}" name="photos" required>
            @error('photos')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
        <label for="body" class="form-label">Body</label>
            <input id="body" value="{{ old('body') }}" type="hidden" name="body" required>
            <trix-editor input="body"></trix-editor>  
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror 
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>








    <script>
        const title = document.getElementById('title');
        const slug = document.getElementById('slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })
        

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
@endsection