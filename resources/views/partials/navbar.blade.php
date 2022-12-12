

<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/">Simple Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            @foreach ($menus as $menu)
              <a class="nav-link {{ Request::is('') ? 'active' : '' }}" href="{{ $menu->link }}">{{ $menu->name }}</a>
            @endforeach
        </div>
        <form action="/" class="d-flex ms-auto p-2" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari Artikel" aria-label="Search" name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
      </div>
    </div>
  </nav>