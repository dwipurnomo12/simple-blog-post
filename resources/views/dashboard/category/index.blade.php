@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Category</h2>

                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                
                        <div class="row">
                            <h5>Tambah Category Baru</h5>
                            <div class="col">
                                <form action="/dashboard/category" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="name" class="form-label @error('name') is-invalid @enderror">Nama Category</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                    <label for="slug" class="form-label @error('slug') is-invalid @enderror">slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required>
                                        @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="body" class="form-label @error('body') is-invalid @enderror">Deskripsi</label>
                                        <textarea name="body" id="editor">{{ old('body') }}</textarea>
                                            @error('body')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-5 float-end">Tambah Category</button>
                                </form>
                            </div>
                        </div>              
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                {{-- Tabel Category Data --}}
                                <table id="table_id" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->body }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm mb-1" href="/dashboard/category/{{ $category->slug }}/edit" role="button" ><i class="menu-icon tf-icons bx bx-edit-alt"></i></a>

                                                    <form action="/dashboard/category/{{ $category->slug }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah Yakin Ingin Menghapus Category ini?')"><i class="menu-icon tf-icons bx bx-trash-alt"></i></button>
                                                    </form>   
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>


@endsection
