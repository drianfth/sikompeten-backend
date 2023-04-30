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
        Schema::create('jawaban_ak02s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_ak02_id');
            $table->unsignedBigInteger('unit_kompetensi_id');
            $table->string('jawaban');

            $table->timestamps();
            $table->foreign('hasil_ak02_id')->references('id')->on('hasil_ak02s');
            $table->foreign('unit_kompetensi_id')->references('id')->on('unit_kompetensis');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_ak02s');
    }
};
