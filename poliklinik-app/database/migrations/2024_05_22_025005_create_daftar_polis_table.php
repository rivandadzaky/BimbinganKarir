<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPolisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_polis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pasien');
            $table->integer('id_jadwal');
            $table->text('keluhan');
            $table->integer('no_antrian');
            $table->enum('status_periksa', ['0','1']);
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
        Schema::dropIfExists('daftar_polis');
    }
}
