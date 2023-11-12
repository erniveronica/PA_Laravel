@extends('layouts.user')

@section('content')
    <div class="container-xxl py-5" style="margin: 7% 0 5% 0">
      <p><a href="/products">kembali ke halaman sebelumnya</a></p>
        <div class="container my-5">
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
@endsection
