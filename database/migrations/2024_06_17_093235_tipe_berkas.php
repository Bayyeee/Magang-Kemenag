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
            $table->string('tipe_berkas', 100);
            $table->string('upload_berkas', 100);
            $table->timestamp('waktu_upload')->useCurrent();
            $table->timestamps();
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
