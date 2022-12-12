
@extends('layout.main')

@section('container')

    <div class="row">
      <h2> {{ $page }}</h2>
      <b><hr></b>
  

      @foreach ($posts as $post)
        <div class="col-md-4 ">
          <div class="card mb-3">
            @if($post->image)
              <div style="max-height: 200px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid" style="border-radius: 5px;">
              </div>
            @else
              <div>
                <img src="https://picsum.photos/1200/600" alt="" class="img-fluid" style="border-radius: 5px">
              </div>
            @endif
            <div class="card-body">
              <h5 class="card-title"><a href="/{{ $post->slug }}" style="text-decoration: none">{{ $post->title }}</a></h5>
              <p class="card-text">
                  {{ $post->excerpt }}
              </p>
              <p class="card-text">
                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="d-flex justify-content-center mt-2">
      {{ $posts->links() }}
    </div>
    

@endsection