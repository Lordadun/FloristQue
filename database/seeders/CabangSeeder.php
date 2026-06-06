<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cabang;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Cabang::create([
        'nama_cabang' => 'Mini Market Cabang Cianjur',
        'alamat' => 'Jl. Raya Cianjur',
        'kota' => 'Cianjur',
    ]);

    Cabang::create([
        'nama_cabang' => 'Mini Market Cabang Bandung',
        'alamat' => 'Jl. Raya Bandung',
        'kota' => 'Bandung',
    ]);
    }
}
