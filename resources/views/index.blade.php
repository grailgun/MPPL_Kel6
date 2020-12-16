@extends('layouts.template')

@section('body')

<div style="background-color: white">
  <div class="container">
    {{-- Header diatasnya --}}
    <header>
      {{-- Navbar --}}
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">Cari Sablon</a>
            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link btn btn-danger" href="/formulir-1">Jadi Penjual</a>
              </div>
            </div>
        </div>
      </nav>
    </header>
    {{-- End of Header --}}
    
    {{-- Jumbotron --}}
    <div class="jumbotron">
      <div class="my-4">
        <div class="mx-auto d-flex flex-column">
          <div id="judul">
            <h1 class="display-4">Selamat Datang Di Cari Sablon</h1>
            <p class="lead">Penyedia berbagai jasa sablon yang terpercaya dan berkualitas</p>
          </div>
    
          <div class="row d-flex justify-content-center">
            <form action="/" method="GET" class="form-inline w-100 col-md-10">
                <input class="form-control col-md-9" type="text" placeholder="Nama Usaha" aria-label="search" style="height:60px;">
                <button type="submit" class="btn tombol-cari col-md-2" input style="height:75px; width:250px;"> Cari </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- End Jumbotron --}}
  </div>
</div>

<div>
  <div class="container">

    <h2 class="my-3"><u>Daftar Penyedia Jasa Sablon</u></h2>

    <!--1row contain 3 card-->
    <div class="row justify-content-center">

      @foreach ($pengusaha as $p)
        <div class="col-md-3 mt-5">
          <div class="card h-100 border-dark">
            
            @if(!empty($p->foto_toko))
              <img src={{ URL::asset("foto_toko/{$p->nama_toko}/{$p->foto_toko}") }} class="card-img-top" alt="gambar product">
            @else
              <img src="{{asset('assets/img/profile-photo-a.png')}}" class="card-img-top" alt="gambar product">
            @endif

            <div class="card-body">
                <h2 class="card-title">{{$p->nama_toko}}</h2>
                <div class="row">
                    <div class="col">
                        <p><span>Lokasi:</span></p>
                    </div>
                    <div class="col lokasi-profil">
                        <p><span>{{$p->Alamat[0]->kota}}</span></p>
                    </div>
                </div>
                <p class="card-text">Kami akan menerima semua design dengan hasil yang memuaskan.</p>
            </div>
            <div class="card-footer text-center">
              <a href="/profil/{{$p->id}}" class="btn btn-danger w-75">Kunjungi Profil</a>
            </div>
          </div>
        </div>
      @endforeach
      
    </div>

    <div class="row">
      <div style="font-size: 30px" class="my-3 mb-5 text-center">
        {{ $pengusaha->links() }}
      </div>
    </div>
    

    {{-- Container --}}
  </div>
</div>

@endsection