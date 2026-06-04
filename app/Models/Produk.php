<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'kategori_id',
        'kode_produk',
        'nama_produk',
        'satuan',
        'harga_beli',
        'harga_jual',
        'stok_minimum',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function stokBarangs()
    {
        return $this->hasMany(StokBarang::class);
    }
}
