
@extends('layout.login')

@section('container-login')
  <div class="row justify-content-center">
    <div class="col-md-5">
      <main class="form-signin w-100 text-center m-auto">
      
        {{-- Flash Message Failed --}}
          @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

        <form action="/login" method="POST">
          @csrf
          <img class="mb-4" src="img/laravel-logo.png" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Sign In</h1>
      
          <div class="form-floating mb-3">
            <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required >
            <label for="email">Email</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
          </div>

          <div class="form-floating mb-3">
            <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password" value="{{ old('password') }}" autofocus required>
            <label for="password" >Password</label>
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
          </div>
          
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <p><a href="/" style="text-decoration: none"><- Kembali</a></p>
        </form>
      </main>
    </div>
  </div>
@endsection
