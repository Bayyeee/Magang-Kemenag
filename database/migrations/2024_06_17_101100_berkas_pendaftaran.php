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
        Schema::create('berkas_pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id_berkaspendaftaran');
            $table->unsignedBigInteger('id_tipeberkas');
            $table->unsignedBigInteger('id_pendaftaran');
            $table->enum('status_verifikasi', ['proses', 'diverifikasi', 'ditolak'])->default('proses');
            $table->string('path');
            $table->timestamps();

            $table->foreign('id_tipeberkas')->references('id_berkas')->on('tipe_berkas')->onDelete('cascade');
            $table->foreign('id_pendaftaran')->references('id_pendaftaran')->on('pendaftaran')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
