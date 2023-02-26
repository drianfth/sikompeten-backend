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
        Schema::create('r_kelengkapans', function (Blueprint $table) {
            $table->id();
            $table->string('hasil_apl01_id');
            $table->string('kelengkapan');
            $table->string('jawaban_kelengkapan');

            $table->timestamps();

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
        Schema::dropIfExists('r_kelengkapans');
    }
};
