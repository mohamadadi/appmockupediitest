<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createtbriwayatpekerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_riwayat_pekerjaans', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_pelamar')->nullable();
        $table->string('perusahaan')->nullable();
        $table->string('posisi')->nullable();
        $table->string('gaji')->nullable();
        $table->string('tahun')->nullable();
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
        Schema::dropIfExists('tb_riwayat_pekerjaans');
    }
}
