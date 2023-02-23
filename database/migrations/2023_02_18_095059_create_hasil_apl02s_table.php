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
        Schema::create('hasil_apl02s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schema_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('paket_asesmen_id');
            $table->boolean('konfirmasi')->default(false);
            $table->string('name');
            $table->string('soal1')->nullable();
            $table->string('soal2')->nullable();
            $table->string('soal3')->nullable();
            $table->string('soal4')->nullable();
            $table->string('soal5')->nullable();
            $table->string('soal6')->nullable();
            $table->string('soal7')->nullable();
            $table->string('soal8')->nullable();
            $table->string('soal9')->nullable();
            $table->string('soal10')->nullable();
            $table->string('soal11')->nullable();
            $table->string('soal12')->nullable();
            $table->string('soal13')->nullable();
            $table->string('soal14')->nullable();
            $table->string('soal15')->nullable();
            $table->string('soal16')->nullable();
            $table->string('soal17')->nullable();
            $table->string('soal18')->nullable();
            $table->string('soal19')->nullable();
            $table->string('soal20')->nullable();
            $table->string('soal30')->nullable();
            $table->string('soal31')->nullable();
            $table->string('soal32')->nullable();
            $table->string('soal33')->nullable();
            $table->string('soal34')->nullable();
            $table->string('soal35')->nullable();
            $table->string('soal36')->nullable();
            $table->string('soal37')->nullable();
            $table->string('soal38')->nullable();
            $table->string('soal39')->nullable();
            $table->string('soal40')->nullable();

            $table->string('bukti1')->nullable();
            $table->string('bukti2')->nullable();
            $table->string('bukti3')->nullable();
            $table->string('bukti4')->nullable();
            $table->string('bukti5')->nullable();
            $table->string('bukti6')->nullable();
            $table->string('bukti7')->nullable();
            $table->string('bukti8')->nullable();
            $table->string('bukti9')->nullable();
            $table->string('bukti10')->nullable();
            $table->string('bukti11')->nullable();
            $table->string('bukti12')->nullable();
            $table->string('bukti13')->nullable();
            $table->string('bukti14')->nullable();
            $table->string('bukti15')->nullable();
            $table->string('bukti16')->nullable();
            $table->string('bukti17')->nullable();
            $table->string('bukti18')->nullable();
            $table->string('bukti19')->nullable();
            $table->string('bukti20')->nullable();
            $table->string('bukti30')->nullable();
            $table->string('bukti31')->nullable();
            $table->string('bukti32')->nullable();
            $table->string('bukti33')->nullable();
            $table->string('bukti34')->nullable();
            $table->string('bukti35')->nullable();
            $table->string('bukti36')->nullable();
            $table->string('bukti37')->nullable();
            $table->string('bukti38')->nullable();
            $table->string('bukti39')->nullable();
            $table->string('bukti40')->nullable();


            $table->timestamps();

            $table->foreign('schema_id')->references('id')->on('schemas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('paket_asesmen_id')->references('id')->on('paket_asesmens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_apl02s');
    }
};
