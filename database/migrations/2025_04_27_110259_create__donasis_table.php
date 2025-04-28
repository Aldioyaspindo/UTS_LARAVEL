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
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_donatur');
            $table->string('email')->unique();
            $table->integer('nominal');
            $table->enum('metode_pembayaran', ['BRI', 'BNI', 'MANDIRI', 'DANA', 'BCA', 'OVO', 'GOPAY'])->nullable();
            $table->date('tanggal_donasi')->nullable();
            $table->text('dukungan_doa')->nullable();
            $table->enum('status', ['menunggu konfirmasi', 'dikonfirmasi', 'batal'])->default('menunggu konfirmasi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Donasis');
    }
};
