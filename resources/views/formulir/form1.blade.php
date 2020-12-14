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
    
        <form action="/formulir/step-1" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label>Nama Toko</label>
                <input type="text" class="form-control" name="nama_toko" value={{ (empty($pengusaha->nama_toko) ? old('nama_toko') : $pengusaha->nama_toko) }}>
            </div>
            
            <div class="form-group">
                <label>Nama Pemilik</label>
                <input type="text" class="form-control" name="nama_pemilik" value={{ (empty($pengusaha->nama_pemilik) ? old('nama_pemilik') : $pengusaha->nama_pemilik) }}>
            </div>
    
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="tel" class="form-control" name="nomor_telepon" value="{{ (empty($pengusaha->nomor_telepon) ? old('nomor_telepon') : $pengusaha->nomor_telepon) }}">
            </div>
            
            <div class="form-group">
                <b>Foto Profil</b><br/>
                <input type="file" {{ (!empty($pengusaha->foto_toko)) ? "disabled" : ''}} class="form-control-file" name="foto_toko">
                @if (!empty($pengusaha->foto_toko))
                    <img src="<?php echo asset("foto_toko/{$pengusaha->nama_toko}/{$pengusaha->foto_toko}")?>" alt="">    
                @endif
            </div>

            <div class="d-flex flex-row-reverse">
                <input type="submit" value="Next" class="btn btn-primary">
            </div>
            
        </form>
        @if(isset($pengusaha->foto_toko))
            <form action="/formulir-1/remove-image" method="post">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger">Remove Image</button>
            </form>
        @endif
    
    </div>




</div>
@endsection  

