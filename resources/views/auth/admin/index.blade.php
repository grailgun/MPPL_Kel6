@extends('layouts.template')

@section('body')

<header>
    <div class="navbar" style="background:orange">
        <div class="container my-1">
            <h1 class="navbar-brand d-flex" style="font-size: 1.8rem"> Welcome {{$admin->name}} </h1>
            <h2 class="navbar-toggler"><a href="/admin/logout" class="btn-lg btn-danger">Logout</a></h2>
        </div>
    </div>
</header>

<div class="container my-4">

    <table class="table table-bordered table-hover mb-5">
        <h3>Menunggu konfirmasi</h3>
        <thead>
            <tr>
                <th>Nama Toko</th>
                <th>Nama Pemilik</th>
                <th>Nomor Telepon</th>
                <th>Detail</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengusahaNonApproved as $PNA)
                <tr class= "table-danger" >
                    <td>{{ $PNA->nama_toko }}</td>
                    <td>{{ $PNA->nama_pemilik }}</td>
                    <td>{{ $PNA->nomor_telepon }} </td>
                    <td>
                        <a href="/admin/profil-pengusaha/ {{$PNA->id}}" class="btn btn-primary">Profil</a>
                    </td>
                    <td>
                        @if ($PNA->confirmed != 0)
                            Terkonfirmasi
                        @else
                            Belum terkonfirmasi
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-bordered table-hover">
        <h3>Sudah terkonfirmasi</h3>
        <thead>
            <tr>
                <th>Nama Toko</th>
                <th>Nama Pemilik</th>
                <th>Nomor Telepon</th>
                <th>Detail</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengusahaApproved as $PA)
                <tr class= "table-success" >
                    <td>{{ $PA->nama_toko }}</td>
                    <td>{{ $PA->nama_pemilik }}</td>
                    <td>{{ $PA->nomor_telepon }} </td>
                    <td>
                        <a href="/admin/profil-pengusaha/ {{$PA->id}}" class="btn btn-primary">Profil</a>
                    </td>
                    <td>
                        @if ($PA->confirmed != 0)
                            Terkonfirmasi
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
