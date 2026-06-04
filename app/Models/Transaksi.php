<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'kode_transaksi',
        'cabang_id',
        'kasir_id',
        'total',
        'bayar',
        'kembalian',
        'tanggal_transaksi',
    ];

    public function cabang()
    {
        return $this->belongsTo(Cabang::class);
    }

    public function kasir()
    {
        return $this->belongsTo(User::class, 'kasir_id');
    }

    public function detailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
