<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

use App\Models\Manajemen;
use App\Models\jenis;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $manajemen =manajemen::all();
        $jenis =jenis::all();
        $kategori =Kategori::all();
        return view('landing.home',compact('manajemen','jenis','kategori'));
    }   
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required',
            'kategori' => 'required',   
            'total' => 'required',
    
        ]);
        $manajemen = new manajemen();
        $manajemen->nama = $request->input('nama');
        $manajemen->jumlah = $request->input('jumlah');
        $manajemen->kategori = $request->input('kategori');
        $manajemen->total = $request->input('total');
      
        
    $manajemen->save();
    return redirect()->route('home.index')->with('success',' Data Berhasil Ditambahkan ');
    }
}
