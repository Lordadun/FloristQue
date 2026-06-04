@extends('layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-6 text-gray-800">
    Data Produk
</h2>

<a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
    Tambah Produk
</a>

<table class="w-full mt-6 border">
    <thead class="bg-black-200">
        <tr>
            <th class="p-2">Nama</th>
            <th class="p-2">Stock</th>
            <th class="p-2">Harga</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr class="text-center border-t">
            <td class="p-2">{{ $product->name }}</td>
            <td class="p-2">{{ $product->stock }}</td>
            <td class="p-2">Rp {{ number_format($product->price) }}</td>
            <td class="p-2">
                <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-600">
                    Edit
                </a>

                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 ml-2">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection