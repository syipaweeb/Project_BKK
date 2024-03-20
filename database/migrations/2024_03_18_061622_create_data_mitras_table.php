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
        Schema::create('data_mitras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('banner');
            $table->string('logo');
            $table->string('nama_perusahaan');
            $table->text('deskripsi_perusahaan');
            $table->integer('nomor_telepon');
            $table->string('email');
            $table->text('lokasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_mitras');
    }
};
