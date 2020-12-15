<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Pengusaha;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $admin = Auth::guard('admin')->user();
        $pengusahaNonApproved = Pengusaha::where('confirmed', 0)->get();
        $pengusahaApproved = Pengusaha::where('confirmed', 1)->get();

        return view('auth.admin.index', compact('admin', 'pengusahaNonApproved', 'pengusahaApproved'));
    }

    public function showProfile($id){
        $pengusaha = Pengusaha::find($id);
        $portofolio = $pengusaha->Portofolio;
        $alamat = $pengusaha->Alamat;
        $galeri = $portofolio->Galeries;
        $produk = $pengusaha->Produk;
        
        $admin = Auth::guard('admin')->user();

        if($pengusaha == null) {
            return redirect()
                ->back()
                ->withErrors(["Incorrect user login details!"]);
        }

        return view('auth.admin.profil', compact('pengusaha', 'portofolio', 'galeri', 'alamat', 'produk', 'admin'));
    }

    public function approve($id){
        $pengusaha = Pengusaha::find($id);
        $pengusaha->confirmed = 1;
        $pengusaha->save();

        return redirect('/admin');
    }
}
