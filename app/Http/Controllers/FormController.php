<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Pengusaha;
use App\Portofolio;
use App\Galeri;
use App\Produk;
use Image;
use File;
use App\Alamat;

class FormController extends Controller
{
    public function FormPage1(Request $request){
        $pengusaha = $request->session()->get('pengusaha');
        return view('formulir.form1', compact('pengusaha'));
    }

    public function FormPage2(Request $request){
        $portofolio = $request->session()->get('portofolio');
        $pengusaha = $request->session()->get('pengusaha');
        $galeri = $request->session()->get('galeri');
        if(!empty($galeri)){
            //Proses delete image dari si file
            //dd($galeri[0][1]);
            for($i=0; $i < count($galeri[0]); $i++){
                $path = public_path().'/foto_toko/'.$pengusaha->nama_toko.'/'.$galeri[0][$i];
                if(File::exists($path)){
                    File::delete($path);
                }
            }
            $request->session()->forget('galeri');
        }
        //dd('Empty');
        return view('formulir.form2', compact('portofolio'));
    }

    public function FormPage3(Request $request){
        $alamat = $request->session()->get('alamat');
        return view('formulir.form3', compact('alamat'));
    }

    public function FormPage4(Request $request){
        return view('formulir.form4');
    }

    public function removeImage1(Request $request){
        $pengusaha = $request->session()->get('pengusaha');
        $path = public_path().'/foto_toko/'.$pengusaha->nama_toko.'/'.$pengusaha->foto_toko;
        if(File::exists($path)){
            File::delete($path);
        }
        $pengusaha->foto_toko = null;
        return view('formulir.form1',compact('pengusaha'));
    }

    public function PostFormStep1(Request $request){

        $requestData = $request->validate([
            'nama_toko' => 'required|max:50',
            'nama_pemilik' => 'required',
            'nomor_telepon' => 'required|numeric|min:10',
        ]);

        if(empty($request->session()->get('pengusaha'))){
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
            $basename = Str::random(10);
            $filename = $basename .'.'.$avatar->getClientOriginalExtension();
            
            $path = public_path().'/foto_toko/'.$request->nama_toko;

            if (!File::exists($path)) {
                File::makeDirectory($path,0777,true);
            }

            $image = Image::make($avatar);
            $image->resize(200,200, function($constraint){
                $constraint->aspectRatio();
            })->save($path.'/'.$filename, 80);

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

        $pengusaha = $request->session()->get('pengusaha');
        if($request->hasfile('galeri')){
            $this->validate($request, [
                'galeri.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
            ]);

            foreach($request->galeri as $image){
                $basename = Str::random(20);
                $filename = $basename .'.'.$image->getClientOriginalExtension();
                
                $path = public_path().'/foto_toko/'.$pengusaha->nama_toko;

                if (!File::exists($path)) {
                    File::makeDirectory($path);
                }

                $img = Image::make($image);
                $img->resize(1024, null, function($constraint){
                    $constraint->aspectRatio();
                })->save($path.'/'.$filename, 80);

                // $data = array(
                //     'gambar' => $filename
                // );
                $galeriImage[] = $filename;
            }
            
            if(empty($request->session()->get('galeri'))){
                $galeri = new Galeri();
                $galeri->fill($galeriImage);
                $request->session()->push('galeri', $galeriImage);
            }
            else {
                $galeri = $request->session()->get('galeri');
                $galeri -> fill($galeriImage);
                $request -> session()->push('galeri', $galeriImage);
            }
        }

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
        $galeri = $request->session()->get('galeri');

        for ($i=0; $i < count($requestData['nama_produk']); $i++) { 
            # code...
            $data = array(
                'nama_produk' => $requestData['nama_produk'][$i],
                'deskripsi_produk' => $requestData['deskripsi_produk'][$i],
                'harga_produk' => $requestData['harga_produk'][$i]
            );
            $produk_data[] = $data;
        }

        for ($i=0; $i < count($galeri[0]); $i++) { 
            # code...
            $data = array(
                'gambar' => $galeri[0][$i]
            );
            $galeriImg[] = $data;
        }    
        
        if($pengusaha->nomor_telepon[0] == '0'){
            $pengusaha->nomor_telepon = substr_replace($pengusaha->nomor_telepon, '62', 0, 1);
        }

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
        $pengusaha->portofolio->Galeries()->createMany($galeriImg);
        $request->session()->flush();
        return redirect('/');
    }
}
