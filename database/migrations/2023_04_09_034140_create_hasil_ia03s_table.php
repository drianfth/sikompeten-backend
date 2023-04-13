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
        Schema::create('hasil_ia03s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('hasil_apl01_id');
            $table->unsignedBigInteger('sesi_id');
            $table->unsignedBigInteger('hasil_ak01_id');
            $table->string('konfirmasi_validator')->default('belum konfirmasi');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('hasil_apl01_id')->references('id')->on('hasil_apl01s');
            $table->foreign('hasil_ak01_id')->references('id')->on('hasil_ak01s');
            $table->foreign('sesi_id')->references('id')->on('sesis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_ia03s');
    }
};
