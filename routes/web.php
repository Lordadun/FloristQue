<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/produk', function () {
    return "Halaman Produk";
});

Route::get('/pesanan', function () {
    return "Halaman Pesanan";
});

Route::get('/penjualan', function () {
    return "Halaman Penjualan";
});

Route::get('/pendapatan', function () {
    return "Halaman Pendapatan";
});
