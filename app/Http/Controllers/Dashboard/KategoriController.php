<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function viewKategori(){
        $data = Kategori::all();
        return view('dashboard.kategoriSampah',compact('data'));
    }
    public function formKategori(){
        return view('dashboard.formKategori');
    }

    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->kategori = $request->input('kategori');
        $kategori->harga = $request->input('harga');
        $kategori->deskripsi = $request->input('deskripsi');
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('image/sampah/', $filename);
            $kategori->foto = $filename;
        }
        $kategori->save();

    return redirect()->route('Kategori')->with('success',' Data Berhasil Ditambahkan ');
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        if ($kategori) {
            $kategori->delete();

            return redirect()->back()->with('status', 'Data telah dihapus');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
}

