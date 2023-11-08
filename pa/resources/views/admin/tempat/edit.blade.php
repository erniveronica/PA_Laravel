@extends('layouts.admin')

@section('content')


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header text-center">
                        <h2 class="mb-0">Ubah Data Tempat Makan</h2>
                    </div>
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

                        <form action="{{ url('controlerny') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama Tempat Makan:</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        required placeholder="Masukan nama tempat makan"/>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="alamat">Alamat:</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        required placeholder="Masukan alamat tempat makan"/>
                                </div>
                            </div>

                            <div class="row my-4">
                                <div class="col">
                                  <label for="jam_buka" class="form-label">Jadwal Buka: </label>
                                  <input type="time" name="jam_buka" id="jam_buka" class="form-control" required>
                                </div>
                                <div class="col">
                                  <label for="jam_tutup" class="form-label">Jadwal Tutup: </label>
                                  <input type="time" name="jam_tutup" id="jam_tutup" class="form-control" required>
                                </div>
                                <div class="col">
                                  <label for="gambar" class="form-label">Foto Toko: </label>
                                  <input type="file" name="gambar" id="gambar" class="form-control" required accept=".png, .jpg">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="link_maps">Link Gmaps (opsional):</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="link_maps" id="link_maps" class="form-control"
                                        placeholder="Masukan link Gmaps tempat makan"/>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="kontak">Kontak Tempat Makan (opsional):</label>
                                <div class="input-group input-group-merge">
                                    <textarea name="kontak" id="kontak" class="form-control" cols="30" rows="5" placeholder="Masukan kontak tempat makan"></textarea>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mb-3">
                                <button class="btn btn-primary" type="button">Ubah Tempat Makan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
</div>
@endsection
