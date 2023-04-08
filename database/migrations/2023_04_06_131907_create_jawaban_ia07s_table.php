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
        Schema::create('jawaban_ia07s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_ia07_id');
            $table->unsignedBigInteger('pertanyaania07_id');
            $table->string('rekomendasi');
            $table->string('jawaban');
            $table->timestamps();

            $table->foreign('hasil_ia07_id')->references('id')->on('hasil_ia07s');
            $table->foreign('pertanyaania07_id')->references('id')->on('pertanyaania07s');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_ia07s');
    }
};
