<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stok_masuks', function (Blueprint $table) {
        $table->id();
        $table->foreignId('cabang_id')->constrained('cabangs')->cascadeOnDelete();
        $table->foreignId('produk_id')->constrained('produks')->cascadeOnDelete();
        $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        $table->integer('jumlah');
        $table->date('tanggal');
        $table->text('keterangan')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_masuks');
    }
};
