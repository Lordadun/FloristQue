@extends('layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-6 text-gray-800">
    Tambah Produk
</h2>

<form action="{{ route('products.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow-md">

    @csrf

    <div>
        <label class="block font-semibold">Nama Produk</label>
        <input type="text" name="name" class="w-full border p-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Deskripsi</label>
        <textarea name="description" class="w-full border p-2 rounded"></textarea>
    </div>

    <div>
        <label class="block font-semibold">Stock</label>
        <input type="number" name="stock" class="w-full border p-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Harga</label>
        <input type="number" name="price" class="w-full border p-2 rounded" required>
    </div>

    <button type="submit" 
            class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">
        Simpan
    </button>

</form>

@endsection