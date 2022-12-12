@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ $page->title }}</h1>
                        <div class="button"></div>

                        <a class="btn btn-primary mb-1" href="/dashboard/pages" role="button"><i class="menu-icon tf-icons bx bx-arrow-back"></i>Kembali</a>

                        <a class="btn btn-warning mb-1" href="/dashboard/pages/{{ $page->slug }}/edit" role="button"><i class="menu-icon tf-icons bx bxs-edit"></i>Edit page</a>
                        
                        <form action="/dashboard/pages/{{ $page->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger mb-1" onclick="return confirm('Apakah Yakin Ingin Menghapus Page ?')"><i class="menu-icon tf-icons bx bx-trash-alt"></i>Hapus page</button>
                        </form>

                        <article my-4>
                            {!! $page->body !!} <br><br>
                        </article>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
