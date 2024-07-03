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
        Schema::create('berita', function(Blueprint $table) {
            $table->id('id_berita');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_foto');
            $table->string('judul_berita', 30);
            $table->text('isi_berita');
            $table->timestamp('waktu_upload')->useCurrent();
            $table->timestamps();

            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_foto')->references('id_foto')->on('foto_berita')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
