<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {

    $email = $request->email;
    $password = $request->password;

    // LOGIN SEDERHANA
    if ($email === 'floristque@gmail.com' && $password === 'Haidar Ganteng') {
        session(['user' => $email]);
        return redirect('/');
    }

    return back()->with('error', 'Email atau password salah');
});

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/login');
});

Route::get('/', function () {
    if (!session('user')) {
        return redirect('/login');
    }
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

Route::get('/produk', function () {
    return view('produk.index');
})->name('produk');