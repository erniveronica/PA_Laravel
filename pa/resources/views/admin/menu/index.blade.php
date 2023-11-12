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
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
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
                                            <div>
                                                <button class="btn-danger rounded-2"
                                                    onclick="confirmDelete()">Hapus</button>
                                            </div>

                                            <script>
                                                function confirmDelete() {
                                                    Swal.fire({
                                                        title: 'Apakah Anda yakin ingin menghapus ini?',
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Ya, Hapus!',
                                                        cancelButtonText: 'Batal'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            // Jika pengguna mengonfirmasi, redirect ke halaman hapus
                                                            window.location.href = "/hapus_menu/{{ $item->id }}";
                                                        }
                                                    });
                                                }
                                            </script>

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

@endsection
