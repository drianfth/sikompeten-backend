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
        Schema::create('jawaban_ia01s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_ia01_id');
            $table->unsignedBigInteger('sub_elemen_id');
            $table->string('rekomendasi');
            $table->string('penilaian_lanjut')->nullable();
            $table->timestamps();

            $table->foreign('hasil_ia01_id')->references('id')->on('hasil_ia01s');
            $table->foreign('sub_elemen_id')->references('id')->on('sub_elemens');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_ia01s');
    }
};
