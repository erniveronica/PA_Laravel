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
                        <h2 class="mb-0">Tambah Data Menu Makan</h2>
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
                                <label class="form-label" for="alamat">Nama Tempat Makan:</label>
                                <div class="input-group input-group-merge">
                                    <select class="form-select" id="alamat" name="alamat" required>
                                        <option value="" disabled selected>Pilih tempat makan</option>
                                        <option value="COba"></option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="namaTempatMakan">Nama Menu Makan:</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        required placeholder="Masukan nama menu makanan"/>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="harga">Harga:</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-text">Rp</div>
                                    <input type="text" name="harga" id="harga" class="form-control" required placeholder="Masukan harga tanpa titik atau koma"/>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mb-3">
                                <button class="btn btn-primary" type="button">Tambah Menu Makan</button>
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
