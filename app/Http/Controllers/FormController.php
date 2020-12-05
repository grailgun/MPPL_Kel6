<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Pengusaha;
use App\Portofolio;
use App\Galeri;
use App\Produk;
use App\Alamat;

class FormController extends Controller
{
    public function FormPage1(){
        return view('formulir.form1');
    }

    public function FormPage2(Request $request){
        return view('formulir.form2');
    }

    public function FormPage3(Request $request){
        return view('formulir.form3');
    }

    public function FormPage4(Request $request){
        return view('formulir.form4');
    }

    public function PostFormStep1(Request $request){

        $requestData = $request->validate([
            'nama_toko' => 'required|max:50',
            'nama_pemilik' => 'required',
            'nomor_telepon' => 'required|numeric|min:10',
        ]);

        if(empty($request->session()->get('profil'))){
            $pengusaha = new Pengusaha();
            $pengusaha->fill($requestData);
            $request->session()->put('pengusaha', $pengusaha);
        }
        else {
            $pengusaha = $request->session()->get('pengusaha');
            $pengusaha -> fill($requestData);
            $request -> session() -> put('pengusaha', $pengusaha);
        }

        if($request->hasFile('foto_toko')){
            $request->validate([
                'foto_toko' => 'image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $avatar = $request->file('foto_toko');
            $path = 'foto_toko'.'/'.$request->nama_toko;
            $basename = Str::random(10);
            $filename = $basename .".". $avatar->getClientOriginalExtension();
            
            $avatar->move($path, $filename);
            //$avatar->storeAs($path, $filename);

            $pengusaha = $request->session()->get('pengusaha');
            $pengusaha->foto_toko = $filename;
            $request->session() -> put('pengusaha', $pengusaha);
        }

        return redirect('/formulir-2');
    }

    public function PostFormStep2(Request $request){
        $requestData = $request->validate([
            'deskripsi' => 'required',
            'kelebihan' => 'required',
            'kekurangan' => 'required',
        ]);

        if(empty($request->session()->get('portofolio'))){
            $portofolio = new Portofolio();
            $portofolio->fill($requestData);
            $request->session()->put('portofolio', $portofolio);
        }
        else {
            $portofolio = $request->session()->get('portofolio');
            $portofolio -> fill($requestData);
            $request -> session() -> put('portofolio', $portofolio);
        }

        return redirect('/formulir-3');
    }

    public function PostFormStep3(Request $request){
        $requestData = $request->validate([
            'nama_jalan' => 'required',
            'rt_rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
        ]);

        if(empty($request->session()->get('alamat'))){
            $alamat = new Alamat();
            $alamat->fill($requestData);
            $request->session()->put('alamat', $alamat);
        }
        else {
            $alamat = $request->session()->get('alamat');
            $alamat -> fill($requestData);
            $request -> session() -> put('alamat', $alamat);
        }

        return redirect('/formulir-4');
    }
    
    public function PostFormStore(Request $request){
        $requestData = $request->validate([
            'nama_produk.*' => 'required',
            'deskripsi_produk.*' => 'required',
            'harga_produk.*' => 'required',
        ]);

        //Ambil data si pengusaha
        $pengusaha = $request->session()->get('pengusaha');
        $portofolio = $request->session()->get('portofolio');
        $alamat = $request->session()->get('alamat');

        for ($i=0; $i < count($requestData['nama_produk']); $i++) { 
            # code...
            $data = array(
                'nama_produk' => $requestData['nama_produk'][$i],
                'deskripsi_produk' => $requestData['deskripsi_produk'][$i],
                'harga_produk' => $requestData['harga_produk'][$i]
            );
            $produk_data[] = $data;
        }
        //dd($produk_data);

        $pengusaha = Pengusaha::create([
            'nama_toko' => $pengusaha->nama_toko,
            'nama_pemilik' => $pengusaha->nama_pemilik,
            'nomor_telepon' => $pengusaha->nomor_telepon,
            'foto_toko' => $pengusaha->foto_toko
        ]);

        $pengusaha->Portofolio()->create([
            'deskripsi' => $portofolio->deskripsi,
            'kelebihan' => $portofolio->kelebihan,
            'kekurangan' => $portofolio->kekurangan
        ]);

        $pengusaha->Alamat()->create([
            'nama_jalan' => $alamat->nama_jalan,
            'rt_rw' => $alamat->rt_rw,
            'kelurahan' => $alamat->kelurahan,
            'kecamatan' => $alamat->kecamatan,
            'kota' => $alamat->kota,
            'provinsi' => $alamat->provinsi
        ]);

        $pengusaha->Produk()->createMany($produk_data);

        return redirect('/');
    }
}
