@extends('dashboard.layout.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Perbarui Password</h2>
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row mt-3">
                            <div class="col-md-7"> 
                                <form action="/dashboard/user/password/" method="POST">
                                    @method('put')
                                    @csrf

                                    <div class="mb-3">
                                    <label for="current_password" class="form-label @error('current_password') is-invalid @enderror">Masukkan Password Lama</label>
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                        @error('current_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="passwordNew" class="form-label @error('passwordNew') is-invalid @enderror">Masukkan password Baru</label>
                                        <input type="password" class="form-control" id="passwordNew" name="passwordNew">
                                            @error('passwordNew')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="konfirmasiPassword" class="form-label @error('konfirmasiPassword') is-invalid @enderror">konfirmasi password</label>
                                        <input type="password" class="form-control" id="konfirmasiPassword" name="konfirmasiPassword">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-5 float-end">Perbarui Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection