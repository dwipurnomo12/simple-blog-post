
@extends('layout/main')

@section('container')

{{-- Single Post --}}
    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-md-8" >
                <h6><a href="/categories/{{ $post->category->slug }}" style="text-decoration: none">{{ $post->category->name }}</a></h6>
                <h1>{{ $post->title }}</h1>
                <h6><a href="/author/{{ $post->user->username }}" style="text-decoration: none">{{ $post->user->name }}</a></h6>
                
                @if($post->image)
                    <div style="max-height: 400px; overflow:hidden" class="mb-5 mt-5">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid" style="border-radius: 5px;">
                    </div>
                @else
                    <div>
                        <img src="https://picsum.photos/1200/600" alt="" class="img-fluid mt-5 mb-5" style="border-radius: 5px">
                    </div>
                @endif

                <article my-4>
                    {!! $post->body !!} <br><br>
                </article>  
            </div>


            {{-- New Post Sidebar --}}
            <div class="col-md-4 mt-5 mb-4" >
                <div class="card" style="width: 21rem;">
                    <div class="card-header">
                      Post Terbaru
                    </div>
                    <ul class="list list-group-flush">
                        @foreach ($posts as $post)
                            <li class="list-group-item mb-4 mt-3">
                                @if($post->image)
                                    <div style="width:275px; overflow:hidden" class="mt-5 mb-2">
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid" style="border-radius: 5px;">
                                    </div>
                                @else
                                    <div>
                                        <img src="https://picsum.photos/275/150" alt="" class="img-fluid" style="border-radius: 5px">
                                    </div>
                                @endif
                                    <div style="width: 275px">
                                        <a href="/{{ $post->slug }}" style="text-decoration: none;"><h6>{{ $post->title }}</h6></a>
                                    </div>
                            </li>
                        @endforeach
                    </ul>
                  </div>
            </div>
        </div>
    </div>

    {{-- Disquss Comment --}}
    <hr>
    <div id="disqus_thread"></div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://maspurnomo-com.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


@endsection

