<div class="container-fluid bg-light">
  <footer class="py-3">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
      
      @foreach($pagesMenu as $menu)
        <li class="nav-item"><a href="{{ $menu->link }}" class="nav-link px-2 text-muted">{{ $menu->name }}</a></li>
      @endforeach

      <li class="nav-item"><a href="/author/{{ $author->username }}" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center">&copy; 2022 Simple-Blog, Inc</p>
  </footer>
</div>

