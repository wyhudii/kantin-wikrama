<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pemasok;
use App\Models\Merek;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $pemasoks = Pemasok::select('nama_pemasok')
                ->distinct('nama_pemasok')
                ->count('nama_pemasok');
        $barangs = Barang::select('nama_barang')
                ->distinct('nama_barang')
                ->count('nama_barang');
        $transaksis = Transaksi::select('total_barang')
                ->distinct('total_barang')
                ->count('total_barang');
        return view('home', compact( 'pemasoks', 'barangs', 'transaksis'));
    }
}
