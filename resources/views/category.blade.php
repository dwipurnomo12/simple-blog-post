
@extends('layout/main')

@section('container')
<h2>Category {{ $category }}</h2>
<b><hr></b>
    <div class="row mt-3 justify-content-center">
        @foreach ($posts as $post)
        <div class="col-md-3 mt-4">
			@if($post->image)
			<div>
				<img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid" style="border-radius: 5px;">
			</div>
			@else
				<img src="https://picsum.photos/600/400" alt="" class="img-fluid" style="border-radius: 5px">
			@endif
		</div>
		<div class="col-md-8 mt-4">
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

