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
        $this->middleware('auth:admin')->except('getOut');
    }

    public function index(){
        $admin = Auth::guard('admin')->user();
        $pengusaha = Pengusaha::all();

        return view('auth.admin.index', compact('admin', 'pengusaha'));
    }

    public function getOut(){
        return redirect('/');
    }
}
