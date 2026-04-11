@extends('layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white">
    Dashboard
</h2>

<div class="grid grid-cols-2 gap-8">

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

</div>

@endsection