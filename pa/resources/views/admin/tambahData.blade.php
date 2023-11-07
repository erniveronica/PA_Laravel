@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="bg-light p-4">
                        <h1 class="text-center">Tambah Data Tempat Makan</h1>
                        <form action="" class="needs-validation p-5" novalidate>
                            <div class="row">
                                <label for="namaTempatMakan" class="form-label">Nama Tempat Makan: </label>
                                <input type="text" name="namaTempatMakan" id="namaTempatMakan" class="form-control"
                                    required>
                                <div class="invalid-feedback">Nama makanan tidak valid!</div>
                              </div>
                              <div class="row my-4">
                                <label for="alamat" class="form-label">Alamat: </label>
                                <input type="text" name="alamat" id="alamat" class="form-control" required>
                                <div class="invalid-feedback">Alamat tidak valid!</div>
                              </div>
                              <div class="row my-4">
                                <div class="col">
                                  <label for="jadwalBuka" class="form-label">Jadwal Buka: </label>
                                  <input type="time" name="jadwalBuka" id="jadwalBuka" class="form-control" required>
                                  <div class="invalid-feedback">Jadwal buka tidak valid!</div>
                                </div>
                                <div class="col">
                                  <label for="jadwalTutup" class="form-label">Jadwal Tutup: </label>
                                  <input type="time" name="jadwalTutup" id="jadwalTutup" class="form-control" required>
                                  <div class="invalid-feedback">Jadwal tutup tidak valid!</div>
                                </div>
                                <div class="col">
                                  <label for="gambarToko" class="form-label">Foto Toko: </label>
                                  <input type="file" name="gambarToko" id="gambarToko" class="form-control" required accept=".png, .jpg">
                                  <div class="invalid-feedback">Gambar tidak valid!</div>
                                </div>
                            </div>
                            <div class="row my-4">
                                <label for="linkGmaps" class="form-label">Link Gmaps (opsional): </label>
                                <input type="text" name="linkGmaps" id="linkGmaps" class="form-control">
                            </div>
                            <div class="row   ">
                                <label for="kontakToko" class="form-label">Kontak Toko (opsional): </label>
                                <textarea name="kontakToko" id="kontakToko" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                            <div class="row my-4">
                                <button class="btn btn-info" type="submit">Tambah Tempat Makan</button>
                            </div>
                        </form>
                    </div>
                </div>


                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict'

                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.querySelectorAll('.needs-validation')

                        // Loop over them and prevent submission
                        Array.prototype.slice.call(forms)
                            .forEach(function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (!form.checkValidity()) {
                                        event.preventDefault()
                                        event.stopPropagation()
                                    }

                                    form.classList.add('was-validated')
                                }, false)
                            })
                    })()
                </script>
                <!-- / Content -->
            @endsection
