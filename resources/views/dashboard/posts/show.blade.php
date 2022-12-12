@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ $post->title }}</h1>
                        <div class="bottun"></div>

                        <a class="btn btn-primary mb-1" href="/dashboard/posts" role="button"><i class="menu-icon tf-icons bx bx-arrow-back"></i>Kembali</a>

                        <a class="btn btn-warning mb-1" href="/dashboard/posts/{{ $post->slug }}/edit" role="button"><i class="menu-icon tf-icons bx bxs-edit"></i>Edit Post</a>
                        
                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger mb-1" onclick="return confirm('Apakah Yakin Ingin Menghapus Post ?')"><i class="menu-icon tf-icons bx bx-trash-alt"></i>Hapus Post</button>
                        </form>
                       
                        @if($post->image)
                        <div>
                            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mb-5 mt-4" style="border-radius: 5px; width: 1200px; height: 400px">
                        </div>
                        @else
                            <img src="https://picsum.photos/1200/400" alt="" class="img-fluid mb-5 mt-4" style="border-radius: 5px">
                        @endif

        
                        <article my-4>
                            {!! $post->body !!} <br><br>
                        </article>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
