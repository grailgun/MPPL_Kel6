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
        $pengusaha = Pengusaha::all();

        return view('auth.admin.index', compact('admin', 'pengusaha'));
    }

    public function showProfile($id){
        $pengusaha = Pengusaha::find($id);

        if($pengusaha == null) {
            return redirect()
                ->back()
                ->withErrors(["Incorrect user login details!"]);
        }

        return view('auth.admin.profil', compact('pengusaha'));
    }

    public function approve($id){
        $pengusaha = Pengusaha::find($id);
        $pengusaha->confirmed = 2;
        $pengusaha->save();

        return redirect('/admin');
    }
}
