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
    
        <form action="/formulir/step-2" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi">{{ empty($portofolio->deskripsi) ? old('deskripsi') : $portofolio->deskripsi }}</textarea>
            </div>
            
            <div class="form-group">
                <label>Kelebihan</label>
                <textarea class="form-control" name="kelebihan">{{ empty($portofolio->kelebihan) ? old('kelebihan') : $portofolio->kelebihan }}</textarea>
            </div>
        
            <div class="form-group">
                <label>Kekurangan</label>
                <textarea class="form-control" name="kekurangan">{{ empty($portofolio->kekurangan) ? old('kekurangan') : $portofolio->kekurangan }}</textarea>
            </div>
            
            <table class="table table-bordered table-striped" id="product_table">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th style="text-align: center;">
                            <a href="#" class="btn btn-success addImage">+</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="file" name="galeri[]" class="form-control-file" />
                        </td>
                        <td style="text-align: center">
                            {{-- <a href="#" class="btn btn-danger removeImage">-</a> --}}
                        </td>
                    </tr>
                </tbody>
            </table>
        
            <div class="d-flex flex-row-reverse">
                <input type="submit" value="Next" class="btn btn-primary mx-2">
                <a href="/formulir-1" class="btn btn-primary-mx-2">Prev</a>
            </div>

        </form>
    
    </div>

</div>
@endsection  
