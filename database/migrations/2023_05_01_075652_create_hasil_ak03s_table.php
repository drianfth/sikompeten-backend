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
        Schema::create('hasil_ak03s', function (Blueprint $table) {
            $table->id();
            $table->string('hasil_apl01_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('asesor_id')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('waktu');
            $table->string('komentar')->nullable();

            $table->timestamps();
            $table->foreign('hasil_apl01_id')->references('id')->on('hasil_apl01s');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('asesor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_ak03s');
    }
};
