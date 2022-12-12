@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Edit Category</h2>
                        <form action="/dashboard/category/{{ $category->slug }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                            <label for="name" class="form-label @error('name') is-invalid @enderror">Nama Category</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                            <label for="slug" class="form-label @error('slug') is-invalid @enderror">slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $category->slug) }}" required>
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label @error('body') is-invalid @enderror">Deskripsi</label>
                                <textarea name="body" id="editor" required>{{ old('body', $category->body) }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mb-5 float-end">Edit Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection