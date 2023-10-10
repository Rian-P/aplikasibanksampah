<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

use App\Models\Jenis;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index()
    {
        $jenis =jenis::all();
        return view('landing.kategori',compact('jenis'));
    }
}
