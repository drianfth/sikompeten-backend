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
        Schema::create('jawaban_ia03s', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('jawab_unit_ia03_id');
            $table->unsignedBigInteger('hasil_ia03_id');

            $table->unsignedBigInteger('pertanyaania03_id');
            $table->string('rekomendasi');
            $table->string('tanggapan');

            $table->timestamps();
            $table->foreign('hasil_ia03_id')->references('id')->on('hasil_ia03s');
            $table->foreign('pertanyaania03_id')->references('id')->on('pertanyaan_ia03s');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_ia03s');
    }
};
