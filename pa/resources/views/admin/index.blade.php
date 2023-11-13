@extends('layouts.admin')

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="order-0">
            <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title text-primary">Selamat Datang {{ $user->name }} 👋🏼</h5>
                    <p class="mb-4">
                    Sebagai Admin,  <span class="fw-bold">Anda memiliki tanggung jawab penting dalam pengelolaan data.</span>
                    Oleh karena itu, berhati-hatilah dalam mengelola data.
                    </p>
                </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img
                    src="../assets/img/illustrations/man-with-laptop-light.png"
                    height="140" alt="View Badge User"data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png"/>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-12 mb-4 mt-4">
          <div class="row mb-5">
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                          <div class="card-title">
                            <h5 class="text-nowrap mb-2">Total Tempat Makan</h5>
                          </div>
                          <div class="mt-sm-auto">
                            <span class="badge bg-label-warning rounded-pill">{{$dataTempat}} tempat makan</span>
                          </div>
                          <div class="mt-3">
                            <a class="text-body" href="/lihat_tempat"><i class="fa fa-eye text-primary me-2"></i>Lihat Detail</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                          <div class="card-title">
                            <h5 class="text-nowrap mb-2">Total Menu Makan</h5>
                          </div>
                          <div class="mt-sm-auto">
                            <span class="badge bg-label-warning rounded-pill">{{$dataMakan}} menu makanan</span>
                          </div>
                          <div class="mt-3">
                            <a class="text-body" href="/lihat_menu"><i class="fa fa-eye text-primary me-2"></i>Lihat Detail</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                          <div class="card-title">
                            <h5 class="text-nowrap mb-2">Total Admin</h5>
                          </div>
                          <div class="mt-sm-auto">
                            <span class="badge bg-label-warning rounded-pill">{{$dataAdmin}} admin</span>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
<!-- / Content -->
</div>
<!-- Content wrapper -->
@endsection
