@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Semua Halaman</h2>

                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        
                        <a class="btn btn-primary mb-4" href="/dashboard/pages/create" role="button"><i class="menu-icon tf-icons bx bxs-edit"></i>Tambah Halaman</a>
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
                                @foreach ($pages as $page)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->excerpt }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm mb-1" href="/dashboard/pages/{{ $page->slug }}" role="button"><i class="menu-icon tf-icons bx bx-show"></i></a>

                                            <a class="btn btn-warning btn-sm mb-1" href="/dashboard/pages/{{ $page->slug }}/edit" role="button"><i class="menu-icon tf-icons bx bx-edit-alt"></i></a>

                                            <form action="/dashboard/pages/{{ $page->slug }}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah Yakin Ingin Menghapus Page ?')"><i class="menu-icon tf-icons bx bx-trash-alt"></i></button>
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
    


@endsection
