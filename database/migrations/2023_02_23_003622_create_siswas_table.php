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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('nisn');
            $table->string('nis', 8);
            $table->string('nama', 35);
            $table->unsignedBigInteger('id_kelas');
            $table->text('alamat');
            $table->string('no_telp', 13);
            $table->unsignedBigInteger('id_spp');
            $table->timestamps();

            // $table->foreign('id_spp')->references('id_spp')->on('spps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
