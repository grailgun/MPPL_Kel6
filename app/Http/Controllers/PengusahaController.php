<?php

namespace App\Http\Controllers;
use App\Pengusaha;
use App\Portofolio;
use Illuminate\Http\Request;

class PengusahaController extends Controller
{
    public function index()
    {
        $pengusaha = Pengusaha::where('confirmed', 1)->paginate(6);
        // $portofolio = Portofolio::All();
        // dd($portofolio[0]->Galeries[0]->gambar);
        return view('index', compact('pengusaha'));
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
