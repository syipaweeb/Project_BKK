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
        Schema::create('lokers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_perusahaan');
            $table->string('nama_pekerjaan');
            $table->text('deskripsi');
            $table->text('lokasi');
            $table->string('banner');
            $table->string('logo');
            $table->integer('rentang_gaji');
            $table->string('jadwal_tes');
            $table->date('batas_awal');
            $table->date('batas_akhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokers');
    }
};
