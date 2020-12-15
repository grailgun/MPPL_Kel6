@extends('layouts.template')

@section('body')
<div class="container">
    <header class="w-full my-3">
        <ul class="nav justify-content-between">
            <li class="nav-item">
                <a href="/" aria-label="Product">
                    <h1 style="font-size: 1.5em; color: orange;">
                        Cari Sablonan
                    </h1>
                </a>
            </li>
        </ul>
    </header>

    <div class="mx-auto w-75 mb-5">	
 
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br/>
            @endforeach
        </div>
        @endif
    
        <form action="/formulir/step-3" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                        
            <div class="form-group">
                <label>Jalan</label>
                <input type="text" class="form-control" name="nama_jalan" value= {{empty($alamat->nama_jalan) ? old('nama_jalan') : $alamat->nama_jalan}} >
            </div>
                        
            <div class="form-group">
                <label>RT/RW</label>
                <input type="text" class="form-control" name="rt_rw" value= {{empty($alamat->rt_rw) ? old('rt_rw') : $alamat->rt_rw}} >
            </div>
        
            <div class="form-group">
                <label>Kelurahan</label>
                <input type="text" class="form-control" name="kelurahan" value= {{empty($alamat->kelurahan) ? old('kelurahan') : $alamat->kelurahan}} >
            </div>
        
            <div class="form-group">
                <label>Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" value= {{empty($alamat->kecamatan) ? old('kecamatan') : $alamat->kecamatan}} >
            </div>
        
            <div class="form-group">
                <label>Kota</label>
                <input type="text" class="form-control" name="kota" value= {{empty($alamat->kota) ? old('kota') : $alamat->kota}} >
            </div>
        
            <div class="form-group">
                <label>Provinsi</label>
                <input type="text" class="form-control" name="provinsi" value= {{empty($alamat->provinsi) ? old('provinsi') : $alamat->provinsi}} >
            </div>
        
            <div class="d-flex flex-row-reverse">
                <input type="submit" value="Next" class="btn btn-primary mx-2">
                <a href="/formulir-2" class="btn btn-primary-mx-2">Prev</a>
            </div>
        </form>
    
    </div>

</div>
@endsection  