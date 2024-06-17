<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id('id_pendaftaran');
            $table->foreignId('id_tpa')->constrained('tpa')->onDelete('cascade');
            $table->enum('status_verifikasi', ['proses', 'diverifikasi', 'ditolak'])->default('proses');
            $table->timestamp('waktu_pendaftaran')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
