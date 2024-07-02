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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('id_pegawai');
            $table->unsignedBigInteger('id_tpa');
            $table->string('nama_pegawai', 100);
            $table->string('jabatan', 100);
            $table->string('jenis_kelamin');
            // $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->timestamps();

            $table->foreign('id_tpa')->references('id')->on('tpa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
