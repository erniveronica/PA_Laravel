@extends('layouts.user')

@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->



    <!-- Product Start -->
    <div class="container-xxl py-5" style="margin: 7% 0 5% 0">
     

        <div class="container my-5">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Tempat Makan</h1>
                        <p>Berikut adalah tempat makan rekomendasi buat kamu anak-anak kos:</p>
                        <form class="d-flex my-2 my-lg-0" action="" method="POST">
                          @csrf
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="cariNama" id="cariNama" aria-label="Search">
                          <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>

                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($tempat as $item)
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item h-100">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img width="100%" height="230" class=""
                                            src="/data_file/{{ $item->gambar }}" alt="">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            New</div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection
