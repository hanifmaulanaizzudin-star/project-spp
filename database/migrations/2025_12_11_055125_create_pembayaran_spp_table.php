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
        Schema::create('pembayaran_spp', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->foreignId('siswa_id')->constrained('siswas')->onDelete('cascade');
            $table->unsignedSmallInteger('bulan');
            $table->unsignedSmallInteger('tahun');
            $table->integer('nominal');
            $table->foreignId('petugas_id')->constrained('users');
            $table->timestamp('paid_at')->nullable();
            $table->string('bukti_path')->nullable();
            $table->unique(['siswa_id','bulan','tahun']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran_spp');
    }
};
