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
        Schema::create('jawaban_ak05s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_ak05_id');
            $table->string('hasil_apl01_id');
            $table->string('rekomendasi');
            $table->string('keterangan');

            $table->timestamps();
            $table->foreign('hasil_ak05_id')->references('id')->on('hasil_ak05s');
            $table->foreign('hasil_apl01_id')->references('id')->on('hasil_apl01s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_ak05s');
    }
};
