<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = DB::table('manajemen')
        ->select('kategoris.kategori as kategori', DB::raw('COUNT(*) as total'))
        ->join('kategoris', 'manajemen.kategori', '=', 'kategoris.id_kategori')
        ->groupBy('kategoris.kategori')
        ->get();

        $labels = $data->pluck('kategori');
        $totals = $data->pluck('total');

        return view('dashboard.dashboard', compact('labels', 'totals'));
    }  
}
