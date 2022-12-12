
@extends('layout.main')

@section('container')

<div class="card mb-3">
    <img src="/img/bg-author.jpg" class="card-img-top" alt="..." style="height: 15rem">
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="{{ asset('storage/' . $author->image) }}" alt="" class="rounded-circle  mx-auto d-block" style="width: 200px; height: 200px" text-align ="center">
            </div>
           <div class="col-md-7 mt-5">
                <h5 class="card-title">{{ $author->name }}</h5>
                <p class="card-text">{{ $author->biodata }}</p>
           </div>
        </div>
    </div>
  </div>

<div class="row mt-5 justify-content-center">
    @foreach ($posts as $post)
        <div class="col-md-3 mt-3 mb-5">
            <img src="https://picsum.photos/600/400" alt="" class="img-fluid" style="border-radius: 4px">
        </div>
        <div class="col-md-7 mt-5">
            <div class="card-body">
                <h5 class="card-title"><a href="/{{ $post->slug }}" style="text-decoration:none">{{ $post->title }}</a></h5>
                <p class="card-text">{{ $post->excerpt }}</p>
                <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @endforeach
</div>

<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

@endsection