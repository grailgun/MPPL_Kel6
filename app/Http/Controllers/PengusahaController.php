<?php

namespace App\Http\Controllers;
use App\Pengusaha;
use App\Portofolio;
use Illuminate\Http\Request;

class PengusahaController extends Controller
{
    public function index(Request $request)
    {
        $pengusaha = Pengusaha::where('confirmed', 1)->paginate(6);
        
        $request->session()->flush();
        
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
