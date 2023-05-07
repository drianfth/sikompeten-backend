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
        Schema::create('hasil_ak02s', function (Blueprint $table) {
            $table->id();
            $table->string('hasil_apl01_id');
            $table->unsignedBigInteger('sesi_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('asesor_id')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->string('rekomendasi');
            $table->string('tindak_lanjut');
            $table->string('komentar');

            $table->timestamps();
            $table->foreign('hasil_apl01_id')->references('id')->on('hasil_apl01s');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('asesor_id')->references('id')->on('users');
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
        Schema::dropIfExists('hasil_ak02s');
    }
};
