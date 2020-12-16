@extends('layouts.template')
<title> {{$pengusaha->nama_toko}} </title>

@include('layouts.navigationhome')
@section('body')
<div class="container">
  <div class="row">

    {{-- Left side --}}
    <div class="col-md-8">
      {{-- Nama Toko --}}
      <div class="d-flex mb-3">
        <div class="m-2">
          @if(!empty($pengusaha->foto_toko))
            <img src={{ URL::asset("foto_toko/{$pengusaha->nama_toko}/{$pengusaha->foto_toko}") }} class="img-rounded img-thumbnail" style="height: 80px" alt="foto-profil">
          @else
            <img src="{{asset('assets/img/profile-photo-a.png')}}" class="img-rounded img-thumbnail" style="height: 80px" alt="foto-profil">
          @endif
        </div>
        
        <div>
            <h1 class="nama-sablon"> {{$pengusaha->nama_toko}} </h1>
            <h4> {{$pengusaha->nama_pemilik}} </h4>
        </div>
      </div>
      

      {{-- Galeri carousel --}}
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="height: 25rem">
          @for ($i = 0; $i < count($galeri) ; $i++)
            @if ($i == 0)
                <div class="carousel-item active">
                    <a href={{ URL::asset("foto_toko/{$pengusaha->nama_toko}/{$galeri[$i]->gambar}") }} target="_blank">
                        <img src={{ URL::asset("foto_toko/{$pengusaha->nama_toko}/{$galeri[$i]->gambar}") }} class="d-block w-100 carousel-fix" alt="{{$galeri[$i]->gambar}}">
                    </a>
                </div>
            @else
                <div class="carousel-item">
                    <a href={{ URL::asset("foto_toko/{$pengusaha->nama_toko}/{$galeri[$i]->gambar}") }} target="_blank">
                        <img src={{ URL::asset("foto_toko/{$pengusaha->nama_toko}/{$galeri[$i]->gambar}") }} class="d-block w-100 carousel-fix" alt="{{$galeri[$i]->gambar}}">
                    </a>
                </div>
            @endif
          @endfor
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        {{-- Akhir carousel --}}

        {{-- Portofolio Pengusaha --}}
        <p class="tentang-penyablon">Tentang Penyablon</p>

        <div class="detail-tentang-penyablon">
          <h2>Deskripsi singkat</h2>
          <p>
            {{ $portofolio->deskripsi }}
          </p>

          <h2>Kelebihan</h2>
          <p>
            {{ $portofolio->kelebihan }}
          </p>

          <h2>Kekurangan</h2>
          <p>
            {{ $portofolio->kekurangan }}
          </p>
        </div>
        {{-- Akhir portofolio --}}

    </div>
    {{-- Akhir dari left side --}}

    {{-- Right side --}}
    <div class="col-md-3">
        <div class="row">
          <div class="col border-dark bg-light">
            <h5 class="panel-jasa-sablon">Jasa/Produk Sablon Kami</h5>
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

              @for($i=0;$i<count($produk);$i++)
              <!-- Accordion card -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne{{$i}}">
                        <a class="nav-link" style="color: orange" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$i}}" aria-expanded="false" aria-controls="collapseOne{{$i}}">
                          <h5 class="mb-0">
                              {{$produk[$i]->nama_produk}}
                          </h5>
                        </a>
                    </div>
                    <!-- Card body -->
                    <div id="collapseOne{{$i}}" class="collapse" role="tabpanel" aria-labelledby="headingOne{{$i}}" data-parent="#accordionEx">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <p><span>Harga mulai:</span></p>
                            </div>
                            <div class="col harga-profil">
                              <p class="ml"><span>IDR {{$produk[$i]->harga_produk}}</span></p>
                            </div>
                          </div>
                          {{ $produk[$i]->deskripsi_produk }}
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
              @endfor
      
            </div>  
          </div>
          
        </div>

        {{-- Telepon pengusaha --}}
        <div class="pt-4">
          <table class="table table-hover">
              <thead>
                  <tr>
                    <th><h3>Telepon</h3></th>
                  </tr>
                </thead>
                <tbody>
                      <tr>
                          <td>
                              {{$pengusaha->nomor_telepon}}
                          </td>
                      </tr>
                      <tr>
                          <td style="text-align: center">
                              <a href="https://wa.me/{{$pengusaha->nomor_telepon}}" class="btn btn-success" target="_blank">Hubungi Pengusaha</a>
                          </td>
                      </tr>
                </tbody>
          </table>
      </div>

      {{-- Alamat Pengusaha --}}
      <div class="pt-4">
          <table class="table table-hover">
              <thead>
                  <tr>
                    <th><h3>Alamat : </h3></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($alamat as $a)
                      <tr>
                          <td>
                              {{$a->nama_jalan}},
                              {{$a->rt_rw}},
                              {{$a->kelurahan}}, {{$a->kecamatan}}, {{$a->kota}}, {{$a->provinsi}}
                          </td>
                      </tr>
                    @endforeach
                </tbody>
          </table>
      </div>
    </div>
    {{-- Akhir right side --}}

  </div>
        
</div>
@endsection