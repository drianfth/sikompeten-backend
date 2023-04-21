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
        Schema::create('jawaban_unit_ia03s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_ia03_id');
            $table->unsignedBigInteger('unit_kompetensi_id');
            $table->string('umpan_balik')->nullable();
            $table->timestamps();

            $table->foreign('hasil_ia03_id')->references('id')->on('hasil_ia03s');
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
        Schema::dropIfExists('jawaban_unit_ia03s');
    }
};
