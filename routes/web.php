<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\StokMasukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware(['role:owner'])->group(function () {
        Route::resource('/cabangs', CabangController::class);
    });

    Route::middleware(['role:owner,manajer'])->group(function () {
        Route::resource('/kategoris', KategoriController::class);
        Route::resource('/produks', ProdukController::class);
        Route::get('/laporan/transaksi', [LaporanController::class, 'transaksi'])->name('laporan.transaksi');
        Route::get('/laporan/stok', [LaporanController::class, 'stok'])->name('laporan.stok');
    });

    Route::middleware(['role:kasir'])->group(function () {
        Route::resource('/transaksis', TransaksiController::class);
    });

    Route::middleware(['role:gudang'])->group(function () {
        Route::resource('/stok-masuk', StokMasukController::class);
    });

    Route::middleware(['role:owner,manajer,supervisor,gudang'])->group(function () {
        Route::resource('/stok-barangs', StokBarangController::class);
    });
});