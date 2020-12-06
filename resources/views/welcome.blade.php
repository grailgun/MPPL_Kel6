@extends('layouts.template')
@section('body')
<div class="card bg-dark text-white">
    <img src="asset('img\gambar4.jpeg')" class="card-img" alt="...">
    <div class="card-img-overlay">
        @include('layouts.navigationhome')
    </div>
  
    <div class="p-lg-auto mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Selamat datang di Cari Sablonan</h1>
        <p class="lead font-weight-normal">Penyedia jasa sablon yang terpecaya dan berkualitas</p>
        <br>
        <p class="text-xl-left pt-5 mt-5 ">cari lebih dari 335 jasa sablon</p>
        <form class="form-inline">
            <div class="form-row">
                
                <div class="form-group mx-0 my-0 p-0 col-md-auto">
                    <!--label for="selectKategori" class="col-lg-2 col-form-label"-->
                    <select class="form-control" >
                        <option selected>Pilih Kategori</option>
                        <option>traditional</option>
                        <option>Modern</option>
                    </select>
                </div>
                <div class="form-group col-md-auto ">
                    <!--label for="masukkanlokasi" class="col-lg-2 col-form-label">Masukkan Lokasi</label-->
                    <input type="text" id="masukkanlokasi" class="form-control" placeholder="Masukkan lokasi">
                </div>
                <div class=" col-md-auto form-group">    
                    <!--label for="harga" class="col-lg-2 col-form-label"-->
                    
                    <input type="text" id="harga" class="form-control" placeholder="Masukkan harga minimal">
                </div>
                <div class="col-md-auto form-group ">
                    <button type="submit" class="btn btn-secondary" >Cari</button>
                </div>
            </div>
            </form>
    </div>
    <!--
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>-->
</div>
<h2 class="pl-3 my-3"><u>Paling Banyak Dikunjungi</u></h2>
<!--1row contain 3 card-->
<div class="row row-cols-1 row-cols-md-4 mx-auto">
    <div class="col mb-4">
        <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kategori: A <br>Sablon A</h5>
                <p class="card-text">kami akan menerima semua design dengan hasil yang memuaskan.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer">
                <small class="text-muted"> mulai dari Rp.35.000</small>
            </div>
        </div>
    </div>

    <div class="col mb-4">
        <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kategori: A <br>Sablon H</h5>
                <p class="card-text">kami akan menerima semua design dengan hasil yang memuaskan.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer">
                <small class="text-muted"> mulai dari Rp.38.000</small>
            </div>
        </div>
    </div>
    
    <div class="col mb-4">
        <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kategori: A <br>Sablon F</h5>
                <p class="card-text">kami akan menerima semua design dengan hasil yang memuaskan.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer">
                <small class="text-muted"> mulai dari Rp.39.000</small>
            </div>
        </div>
    </div>
    
    <div class="col mb-4">
        <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kategori: F <br>Sablon D</h5>
                <p class="card-text">kami akan menerima semua design dengan hasil yang memuaskan.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer">
                <small class="text-muted"> mulai dari Rp.38.000</small>
            </div>
        </div>
    </div>

</div>

@endsection  
        