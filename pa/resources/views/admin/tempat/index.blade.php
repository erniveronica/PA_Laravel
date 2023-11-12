@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            <h2 class="mb-0">Lihat Data Tempat Makan</h2>
                            {{-- </div class="row">
                        @foreach ($tempat as $item)
                            <div class="card col-6" style="width: 18rem;">
                                <img src={{ $item->gambar }} class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title fs-3">{{ $item->nama }}</h5>
                                    <p class="card-text">Jam: {{ $item->jam_buka }} - {{ $item->jam_tutup }} </p>
                                    <p class="card-text">Alamat: {{ $item->alamat }} </p>
                                    <p class="card-text">Link Gmaps: {{ $item->link_maps }} </p>
                                    <p class="card-text"><span class="fw-bold">Kontak:</span> {{ $item->kontak }} </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                        @endforeach
                    </div> --}}
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}</li>
                                        @endforeach
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success"> {{ session('success') }}</div>
                                @endif

                            </div>

                            <div class="col-12 mb-4 mt-4">
                                <div class="row mb-5">
                                    @foreach ($tempat as $item)
                                        <div class="col-md-6 col-lg-4 mb-3">
                                            <div class="card">
                                                <div class="card-body text-wrap text-start ">
                                                    <div class="  justify-content-between flex-sm-row flex-column gap-3">
                                                        <div
                                                            class="d-flex flex-sm-column flex-row align-items-start justify-content-between overflow-auto text-wrap">
                                                            <img src="data_file/{{ $item->gambar }}"
                                                                class="object-fit-cover" width="235" height="220"
                                                                style="object-fit: :cover">
                                                            <div class="card-title text-wrap">
                                                                <h5 class="text-wrap my-3 fw-bold fs-2">
                                                                    {{ $item->nama }}</h5>
                                                                <p class="fs-5"> {{ $item->alamat }}
                                                                </p>
                                                                <span
                                                                    class="badge bg-label-secondary rounded-pill text-start">
                                                                    {{ $item->jam_buka }} - {{ $item->jam_tutup }}
                                                                </span>
                                                            
                                                            </div>
                                                            {{-- <p class="">Link Gmaps: {{ $item->link_maps }}</p> --}}
                                                            @if ($item->link_maps != null)
                                                                <a href="{{ $item->link_maps }}"
                                                                    style="color: rgb(255, 182, 64)">Link Gmaps</a>
                                                            @else
                                                                <div></div>
                                                            @endif
                                                        
                                                            <p>{{ $item->kontak }}</p>
                                                            <p class="text-wrap">Dibuat pada: {{ $item->created_at }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="me-4">
                                                            <a href="/edit_tempat/{{ $item->id }}">
                                                                <button class="btn-primary rounded-2">Edit</button>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="/hapus_tempat/{{ $item->id }}">
                                                                <button class="btn-danger  rounded-2">Hapus</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            {{-- <table class="table ">
                                <thead>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jam Buka</th>
                                    <th>Gambar</th>
                                    <th>Link Gmaps</th>
                                    <th>Kontak</th>

                                </thead>
                                <tbody>
                                    @foreach ($tempat as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->jam_buka }} - {{$item->jam_tutup}}</td>
                                            <td>{{ $item->gambar }}</td>
                                            <td>{{ $item->link_maps }}</td>
                                            <td>{{ $item->kontak }}</td>
                                        </tr>
                                </tbody>
                                @endforeach
                            </table> --}}
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
@endsection
