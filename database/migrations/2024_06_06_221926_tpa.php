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
        Schema::create('tpa', function (Blueprint $table) {
            $table->id("id_tpa");
            $table->foreignId("id_users")->constrained("users")->OnDelete('cascade');
            $table->string("nama_tpa", 100);
            $table->string("alamat", 100);
            $table->string("logo", 100);
            $table->timestamps();
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
