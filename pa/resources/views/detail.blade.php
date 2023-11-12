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
                    <h1 class="display-5 mb-3">Detail Tempat Makan</h1>
                    <p>Berikut detail tempat makan berserta menu makanannya.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @if (empty($result))
                <div>
                    <p>Data menu kosong. Harap beritahu admin untuk mengisi menu</p>
                </div>
            @else
                <div class="col-4">

                    <img class="w-100" src="/data_file/{{ $result[0]->gambar }}" alt="">
                </div>
                <div class="col-8 p-4">
                    <h1 class="fw-bold">{{ $result[0]->nama }}</h1>
                    <p class="bg-warning rounded-pill d-inline-block p-2 text-start">{{ $result[0]->jam_buka }} -
                        {{ $result[0]->jam_tutup }} </p>
                    <p>Link Gmaps:

                        @if ($result[0]->link_maps != null)
                            <a href="{{ $result[0]->link_maps }}">
                                {{ $result[0]->link_maps }}
                            </a>
                        @else
                            <div></div>
                        @endif
                    </p>
                    <p>{{ $result[0]->kontak }}</p>
                </div>
        </div>

        <div class="my-5">
            <table class="table ">
                <thead>
                    <th>Menu Makanan</th>
                    <th>Harga</th>

                </thead>
                <tbody>
                    @foreach ($result as $item)
                        <tr>
                            <td>{{ $item->nama_menu }}</td>
                            <td>{{ $item->harga }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
<!-- Content End -->
@endsection
