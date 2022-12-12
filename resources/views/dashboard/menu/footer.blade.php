@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2>Tambah Menu Footer</h2>
                        <form method="POST" action="/dashboard/menu/footer/" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                            <label for="name" class="form-label @error('name') is-invalid @enderror">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="link" class="form-label @error('link') is-invalid @enderror">link</label>
                                <input type="text" class="form-control" id="link" name="link" required value="http://127.0.0.1:8000/page/">
                                    @error('link')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">Lokasi Menu</label>
                                <select class="form-select" aria-label="Disabled select example" name="location" id="location">
                                    <option selected value="footer">Footer</option> 
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Buat</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h2>Semua Menu</h2>
                                @if(session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <table id="table_id" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Link</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($pagesMenu as $menu)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $menu->name }}</td>
                                                <td>{{ $menu->link }}</td>
                                                <td> 
                                                    <form action="/dashboard/menu/footer/{{ $menu->id }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah Yakin Ingin Menghapus menu ini?')"><i class="menu-icon tf-icons bx bx-trash-alt"></i></button>
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



@endsection