@extends('layouts.user')

@section('content')

<!-- Content End -->
<div class="container-xxl py-5" style="margin: 10% 0 5% 0">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="mb-4">
                    <a class="btn btn-primary rounded-pill" href="/">Halaman Sebelumnya</a>
                </div>
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Cari Tempat Makan</h1>
                    <p>Slahkan masukan nama tempat makanan yang ingin dicari.
                    </p>
                    <form class="d-flex my-2 my-lg-0" action="" method="POST">
                        @csrf
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" name="cariNama"
                            id="cariNama" aria-label="Search">
                        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
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
                                            class="fa fa-eye text-primary me-2"></i>View detail</a>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection
