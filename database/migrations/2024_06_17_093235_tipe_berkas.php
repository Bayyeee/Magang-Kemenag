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
        Schema::create('tipe_berkas', function (Blueprint $table) {
            $table->id('id_berkas');
            $table->string('nama_berkas', 100);
            $table->string('tipe_berkas', 100);
            $table->string('upload_berkas', 100);
            $table->enum('status_verifikasi', ['proses', 'diverifikasi', 'ditolak'])->default('proses');
            $table->unsignedBigInteger('id_pendaftaran');
            $table->timestamp('waktu_upload')->useCurrent();
            $table->timestamps();

            // $table->foreign('id_pendaftaran')->references('id_pendaftaran')->on('pendaftaran')->onDelete('cascade');
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipe_berkas');
    }
};
