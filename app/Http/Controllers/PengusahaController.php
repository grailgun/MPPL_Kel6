<?php

namespace App\Http\Controllers;
use App\Pengusaha;
use Illuminate\Http\Request;

class PengusahaController extends Controller
{
    public function index()
    {
        $pengusaha = Pengusaha::All();

        return view('dummy', compact('pengusaha'));
    }



    public function profil($id)
    {
        //
        $pengusaha = Pengusaha::find($id);
        $portofolio = $pengusaha->Portofolio;
        $alamat = $pengusaha->Alamat;
        $galeri = $portofolio->Galeries;
        $produk = $pengusaha->Produk;

        return view('profil', compact('pengusaha', 'portofolio', 'galeri', 'alamat', 'produk'));
    }

}
