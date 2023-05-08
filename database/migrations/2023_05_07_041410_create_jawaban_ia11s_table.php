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
        Schema::create('jawaban_ia11s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_ia11_id');
            $table->unsignedBigInteger('kegiatan_asesmen_id');
            $table->string('ya/tidak');
            $table->string('komentar');
            $table->timestamps();

            $table->foreign('hasil_ia11_id')->references('id')->on('hasil_ia11s');
            $table->foreign('kegiatan_asesmen_id')->references('id')->on('kegiatan_asesmens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_ia11s');
    }
};
