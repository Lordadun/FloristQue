<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'Pak Jayusman',
        'email' => 'owner@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'owner',
        'cabang_id' => null,
    ]);

    User::create([
        'name' => 'Manajer Cabang Cianjur',
        'email' => 'manajer@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'manajer',
        'cabang_id' => 1,
    ]);

    User::create([
        'name' => 'Kasir Cabang Cianjur',
        'email' => 'kasir@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'kasir',
        'cabang_id' => 1,
    ]);

    User::create([
        'name' => 'Gudang Cabang Cianjur',
        'email' => 'gudang@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'gudang',
        'cabang_id' => 1,
    ]);
    }
}
