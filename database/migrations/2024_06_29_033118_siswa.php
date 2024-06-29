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
        Schema::create('siswa', function(Blueprint $table){
            $table->id('id_siswa');
            $table->unsignedBigInteger('id_kelas_tahun_ajar');
            $table->string('nama_siswa', 100);
            $table->string('nomor_identitas', 8)->unique();
            $table->string('jenis_kelamin');
            $table->timestamps();

            $table->foreign('id_kelas_tahun_ajar')->references('id_kelas_tahun_ajar')->on('kelas_tahun_ajar')->onDelete('cascade');
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
