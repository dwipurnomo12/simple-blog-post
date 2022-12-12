@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Foto Profil</h2>
                        @foreach($users as $user)
                            <div class="rounded mx-auto d-block">
                                <img src="{{ asset('storage/' . $user->image) }}" alt="" class="rounded-circle  mx-auto d-block" style="width: 200px; height: 200px" text-align ="center">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Perbarui Profile</h2>
                            @if(session()->has('success-profile'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success-profile') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                             @endif
                        <div class="row">
                            <div class="col">
                                @foreach ($users as $user)
                                <form action="/dashboard/user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
    
                                    <div class="mb-3">
                                        <label for="image" class="form-label @error('image') is-invalid @enderror">Upload Gambar</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
    
                                        <div class="mb-3">
                                        <label for="name" class="form-label @error('name') is-invalid @enderror">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="biodata" class="form-label @error('biodata') is-invalid @enderror">Biodata</label>
                                            <textarea class="form-control" id="biodata" name="biodata">{{ old('biodata', $user->biodata) }}</textarea>
                                                @error('biodata')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
    
                                        <div class="mb-3">
                                            <label for="username" class="form-label @error('username') is-invalid @enderror">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}">
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="email" class="form-label @error('email') is-invalid @enderror">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-5 float-end">Perbarui Profile</button>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        





        
    </div>
    
@endsection