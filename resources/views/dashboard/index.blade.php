@extends('dashboard.layout.main')

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Dashboard</h1>
                    
                    <div class="container-xxl flex-grow-1 container-p-y">
                      <div class="row">
                        <div class="col mb-4 order-0">
                          <div class="card">
                            <div class="d-flex align-items-end row">
                              <div class="col">
                                <div class="card-body">
                                  <h5 class="card-title text-primary">Selamat Datang {{ auth()->user()->name }}🎉</h5>
                                  <p class="mb-4">
                                    Terdapat jenis konfigurasi baru pada bagian header dan footer. memungkinkan Anda membangun situs yang Anda inginkan dengan navigasi bar yang dinamis
                                  </p>
        
                                  <a href="/dashboard/menu/header" class="btn btn-sm btn-outline-primary">Lihat Fitur</a>
                                </div>
                              </div>
                              <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                  <img
                                    src="../assets/img/illustrations/man-with-laptop-light.png"
                                    height="140"
                                    alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                          <div class="card bg-primary text-white mb-3">
                            <div class="card-header">Post</div>
                            <div class="card-body">
                              <h5 class="card-title text-white">Jumlah Semua Postingan</h5>
                              <p class="card-text">{{ $post_total->total }} post</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-secondary text-white mb-3">
                              <div class="card-header">Category</div>
                              <div class="card-body">
                                <h5 class="card-title text-white">Jumlah Semua Category</h5>
                                <p class="card-text">{{ $category_total->total }}</p>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 col-xl-4">
                            <div class="card bg-success text-white mb-3">
                              <div class="card-header">Page</div>
                              <div class="card-body">
                                <h5 class="card-title text-white">Jumlah Semua Page</h5>
                                <p class="card-text">{{ $page_total->total }}</p>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  @endsection