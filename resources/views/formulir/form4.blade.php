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

    <div class="mx-auto mb-5">	
 
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br/>
            @endforeach
        </div>
        @endif
    
        <form action="/formulir/store" method="POST">
            <table class="table table-bordered table-striped" id="product_table">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Harga Produk</th>
                        <th style="text-align: center;">
                            <a href="#" class="btn btn-success addRow">+</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>
                            <input type="text" name="nama_produk[]" class="form-control-sm" />
                        </td>
                        <td>
                            <input type="text" name="deskripsi_produk[]" class="form-control-sm" />
                        </td>
                        <td>
                            <input type="tel" name="harga_produk[]" class="form-control-sm" />
                        </td>
                        <td style="text-align: center">
                            {{-- <a href="#" class="btn btn-danger">-</a> --}}
                        </td>
                    </tr>

                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td>
                            <div class="d-flex flex-row-reverse">
                                @csrf
                                <input type="submit" value="Submit" class="btn btn-primary mx-2">
                                <a href="/formulir-3" class="btn btn-primary-mx-2">Prev</a>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
    
</div>



@endsection