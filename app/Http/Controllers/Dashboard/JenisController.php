<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Jenis;
use App\Models\manajemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = DB::table('manajemen')
        ->select('manajemen.*', 'kategoris.kategori as nama_kategori')
        ->join('kategoris', 'manajemen.kategori', '=', 'kategoris.id_kategori')
        ->get();


        return view('dashboard.pengelolaan',compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        return view('dashboard.tambahsampah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jenis = new manajemen();
        $jenis->jenis = $request->input('jenis');
        $jenis->nama = $request->input('nama');
        $jenis->deskripsi = $request->input('deskripsi');
        $jenis->harga = $request->input('harga');

    
       
        
        
    $jenis->save();
    return redirect()->route('pengelolaan.index')->with('success',' Data Berhasil Ditambahkan ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jenis $jenis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jenis = manajemen::find($id);
        if ($jenis) {
            $jenis->delete();

            return redirect()->back()->with('status', 'Data telah dihapus');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
}
