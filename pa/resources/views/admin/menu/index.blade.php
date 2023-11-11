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
                            <h2 class="mb-0">List Menu Makan</h2>
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

                        </div>

                        <table class="table ">
                            <thead>
                                <th>ID</th>
                                <th>Nama Tempat Makan</th>
                                <th>Menu Makanan</th>
                                <th>Harga</th>
                                <th>Aksi</th>


                            </thead>
                            <tbody>
                                @foreach ($menu as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_tempat }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->harga }}</td>
                                            <td> <a href="/edit_menu/{{ $item->id }}">
                                                    <button class="btn-primary rounded-2">Edit</button>
                                                </a>
                                                <a href="/hapus_menu/{{ $item->id }}">
                                                    <button class="btn-danger  rounded-2">Hapus</button>
                                                </a>
                                            </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>

@endsection --}}
