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
        Schema::create('jawaban_sops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_ia01_id');
            $table->unsignedBigInteger('elemen_id');
            $table->string('jawab_sop');
            $table->timestamps();

            $table->foreign('hasil_ia01_id')->references('id')->on('hasil_ia01s');
            $table->foreign('elemen_id')->references('id')->on('elemens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_sops');
    }
};
