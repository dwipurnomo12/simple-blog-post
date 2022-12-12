@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Tambah Post Baru</h2>
                        <form method="POST" action="/dashboard/posts/" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                              <label for="title" class="form-label @error('title') is-invalid @enderror">Judul</label>
                              <input type="text" class="form-control" id="title" name="title" required autofocus value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                              <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
                              <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('title') }}">
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
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label @error('image') is-invalid @enderror">Gambar Utama</label>
                                <img class="img-preview img-fluid mb-3 col-sm-6">
                                <input type="file" class="form-control" id="image" name="image" onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label @error('body') is-invalid @enderror">Body</label>
                                <textarea name="body" id="editor"></textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Buat</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      {{-- Show Slug Otomatis --}}
      <script>
        const title = document.querySelector('#title');
        const slug  = document.querySelector('#slug');
  
        title.addEventListener('change', function(){
            fetch('/dashboard/post/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data     => slug.value = data.slug)
        });
      </script>


@endsection