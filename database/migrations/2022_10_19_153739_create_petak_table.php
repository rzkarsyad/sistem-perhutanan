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
        Schema::create('petak', function (Blueprint $table) {
            $table->id();
            $table->string('rph');
            $table->string('nama_petak');
            $table->year('tahun_tanam');
            $table->integer('luas_lahan');
            $table->string('jenis_bibit');
            $table->integer('jml_pohon');
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
        Schema::dropIfExists('petak');
    }
};
