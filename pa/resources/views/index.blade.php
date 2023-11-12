@extends('layouts.carousel')

@section('content')
<!-- Content Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Tempat Makan Samarinda</h1>
                    <p>Ketika perut lapar, tempat makan adalah surga bagi pecinta kuliner. Di tempat makan, kita bisa menikmati berbagai macam makanan yang menggugah selera.<br>
                        Berikut tempat makan rekomendasi buat kamu.
                    </p>
                </div>
            </div>
            {{-- <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill"
                            href="#tab-1">Vegetable</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fresh</a>
                    </li>
                </ul>
            </div> --}}
        </div>

        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    @if (isset($message))
                        <p>{{ $message }}</p>
                    @elseif(isset($tempat))
                    @foreach ($tempat as $item)
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item h-100">
                            <div class="position-relative bg-light overflow-hidden">
                                <img width="100%" height="230" class=""
                                    src="/data_file/{{ $item->gambar }}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <h2 class="d-block h5 mb-2" href="">{{ $item->nama }}</h2>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-100 text-center border-end py-2">
                                    <a class="text-body" href="/product-detail/{{ $item->id }}"><i
                                            class="fa fa-eye text-primary me-2"></i>Lihat Detail</a>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @endif
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="/products">Lihat Tempat Makan Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection
