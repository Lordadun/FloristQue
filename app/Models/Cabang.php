<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $fillable = [
        'nama_cabang',
        'alamat',
        'kota',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function stokBarangs()
    {
        return $this->hasMany(StokBarang::class);
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}