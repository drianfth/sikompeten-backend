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
        Schema::create('hasil_ak01s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asesor_id');
            $table->unsignedBigInteger('asesi_id')->nullable();
            $table->string('hasil_apl01_id')->nullable();
            $table->unsignedBigInteger('sesi_id');
            $table->boolean('konfirmasi_asesi')->default(false);
            $table->string('bukti');
            $table->string('tuk');
            $table->timestamps();

            $table->foreign('asesor_id')->references('id')->on('users');
            $table->foreign('asesi_id')->references('id')->on('users');
            $table->foreign('sesi_id')->references('id')->on('sesis');
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
        Schema::dropIfExists('hasil_ak01s');
    }
};
