@extends('layouts.app')

@section('content')

<!-- HEADER -->
<div class="mb-6">
    <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
        Dashboard
    </h2>

    <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">
        Selamat datang kembali, Reihan 👋
    </p>
</div>

<!-- CARD -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    <a href="/produk">
        <x-card title="Jumlah Produk" image="{{ asset('images/flower.png') }}">
            120
        </x-card>
    </a>
    
    <a href="/pesanan">
        <x-card title="Pesanan Hari Ini" image="{{ asset('images/sell.png') }}">
            35
        </x-card>
    </a>

    <a href="/pesanan">
        <x-card title="Total Penjualan" image="{{ asset('images/cart.png') }}">
            250
        </x-card>
    </a>

    <a href="/penjualan">
        <x-card title="Pendapatan Hari Ini" image="{{ asset('images/earning.png') }}">
            Rp 2.500.000
        </x-card>
    </a>

</div>

<!-- CHART -->
<div class="bg-white dark:bg-gray-800 
            p-6 rounded-2xl shadow-md mt-8">

    <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">
        📊 Penjualan Bunga
    </h2>

    <canvas id="salesChart" height="100"></canvas>
    
</div>

<!-- RECENT ACTIVITY -->
<div class="bg-white dark:bg-gray-800 
            p-6 rounded-2xl shadow-md mt-6">

    <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">
        🕒 Aktivitas Terbaru
    </h2>

    <ul class="space-y-3 text-sm">

        <li class="flex justify-between items-center">
            <span>🌸 Produk baru ditambahkan</span>
            <span class="text-gray-400 text-xs">2 menit lalu</span>
        </li>

        <li class="flex justify-between items-center">
            <span>📦 Pesanan masuk</span>
            <span class="text-gray-400 text-xs">10 menit lalu</span>
        </li>

        <li class="flex justify-between items-center">
            <span>👤 User baru daftar</span>
            <span class="text-gray-400 text-xs">1 jam lalu</span>
        </li>

    </ul>

</div>

@endsection