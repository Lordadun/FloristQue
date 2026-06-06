<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\StokBarang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role == 'owner') {
            $totalCabang = Cabang::count();
            $totalProduk = Produk::count();
            $totalTransaksi = Transaksi::count();
            $totalStok = StokBarang::sum('stok');
        } else {
            $totalCabang = 1;
            $totalProduk = Produk::count();
            $totalTransaksi = Transaksi::where('cabang_id', $user->cabang_id)->count();
            $totalStok = StokBarang::where('cabang_id', $user->cabang_id)->sum('stok');
        }

        return view('dashboard', compact(
            'totalCabang',
            'totalProduk',
            'totalTransaksi',
            'totalStok'
        ));
    }
}