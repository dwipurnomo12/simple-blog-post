@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Edit Post</h2>
                        <form method="POST" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf

                            <div class="mb-3">
                              <label for="title" class="form-label @error('title') is-invalid @enderror">Judul</label>
                              <input type="text" class="form-control" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                              <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
                              <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('title', $post->slug) }}">
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                                    @foreach ($categories as $category)
                                        @if (old('category_id', $post->category_id) == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar Utama</label>
                                @if($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}"class="img-preview img-fluid mb-3 col-sm-6 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3 col-sm-6">
                                @endif

                                <input type="file" class="form-control" id="image" name="image" onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label @error('body') is-invalid @enderror">Body</label>
                                <textarea name="body" id="editor">{{ old('body', $post->body) }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Perbarui Post</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection