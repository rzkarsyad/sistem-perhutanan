<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pabrik');
            $table->string('lokasi_pabrik');
            $table->string('rph');
            $table->string('nama_petak');
            $table->integer('produksi_dkp');
            $table->string('nama_pengolah');
            $table->integer('produksi_mkp');
            $table->string('rendemen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realisasi');
    }
};
