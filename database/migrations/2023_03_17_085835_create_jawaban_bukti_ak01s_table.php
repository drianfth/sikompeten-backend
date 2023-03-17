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
        Schema::create('jawaban_bukti_ak01s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_ak01_id');
            $table->string('nama_bukti');
            $table->timestamps();

            $table->foreign('hasil_ak01_id')->references('id')->on('hasil_ak01s');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_bukti_ak01s');
    }
};
