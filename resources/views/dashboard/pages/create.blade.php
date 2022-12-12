@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Tambah Halaman Baru</h2>
                        <form method="POST" action="/dashboard/pages/" enctype="multipart/form-data">
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
    
@endsection