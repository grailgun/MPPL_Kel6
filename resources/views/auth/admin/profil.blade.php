@extends('layouts.template')

@section('body')
<header>
    <div class="navbar" style="background:orange">
        <div class="container my-1">
            <h1 class="navbar-brand d-flex" style="font-size: 1.8rem;"> <a href="/admin" class="text-white nav-link">Welcome {{$admin->name}}</a> </h1>
            <h2 class="navbar-toggler">
                @if($pengusaha->confirmed == 0)
                    <a href="/admin/approve/{{$pengusaha->id}}" class="btn-lg btn-success">Terima</a>
                    {{-- <a href="/disapprove">Tolak</a> --}}
                @endif
            </h2>
        </div>
    </div>
</header>

<div class="container my-3">
    <div class="row">

        {{-- Left article --}}
        <div class="col col-md-8">
            
            <div class="d-flex mb-3">
                @if(!empty($pengusaha->foto_toko))
                    <img src={{ URL::asset("foto_toko/{$pengusaha->nama_toko}/{$pengusaha->foto_toko}") }} class="mr-3 img-rounded img-thumbnail" style="height: 100px" alt="foto-profil">
                @else
                    <img src="{{asset('assets/img/profile-photo-a.png')}}" class="mr-3 img-rounded img-thumbnail" style="height: 100px" alt="foto-profil">
                @endif
                
                <div>
                    <h1> {{$pengusaha->nama_toko}} </h1>
                    <h2> {{$pengusaha->nama_pemilik}} </h2>
                </div>
            </div>

            {{-- Carousel Galeri --}}
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
            {{-- Akhir dari carousel --}}

            {{-- Portofolio Pengusaha --}}

            <div class="my-4">
                <h1 class="tentang-penyablon">Tentang Penyablon</h1>
            
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
        </div>

        {{-- right article --}}
        <div class="col col-md-3 my-5">
            <table class="table">
                <thead>
                    <tr>
                      <th><h3>Jasa/Produk</h3></th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr>
                            <td>
                                <div class="border-dark">
                                    <!--Accordion wrapper-->
                                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        
                                        @for($i=0;$i<count($produk);$i++)
                                            <!-- Accordion card -->
                                            <div class="card">
                                                <!-- Card header -->
                                                <div class="card-header" role="tab" id="headingOne{{$i}}">
                                                    <a class="nav-link" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$i}}" aria-expanded="false" aria-controls="collapseOne{{$i}}">
                                                    <h5 class="mb-0">
                                                        {{$produk[$i]->nama_produk}} <i class="fas fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                    </a>
                                                </div>
                                                <!-- Card body -->
                                                <div id="collapseOne{{$i}}" class="collapse" role="tabpanel" aria-labelledby="headingOne{{$i}}" data-parent="#accordionEx">
                                                    <div class="card-body">
                                                        <p> Harga Produk : {{$produk[$i]->harga_produk}} </p>
                                                        {{$produk[$i]->deskripsi_produk}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion card -->
                                        @endfor
                                    </div>
                                    <!-- Accordion wrapper -->
                                </div>
                            </td>
                        </tr>
                  </tbody>
            </table>

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

    </div>
</div>

@endsection