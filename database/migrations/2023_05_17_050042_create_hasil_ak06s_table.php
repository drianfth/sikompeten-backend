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
        Schema::create('hasil_ak06s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_skema_id');
            $table->unsignedBigInteger('asesor_id');
            $table->unsignedBigInteger('schema_id');
            $table->unsignedBigInteger('sesi_id');
            $table->string('tuk');
            $table->string('rprinsip_asesmen');
            $table->string('rpemenuhan_dimensik');
            $table->string('nama_peninjau');
            $table->string('komentar')->nullable();

            $table->timestamps();
            $table->foreign('asesor_id')->references('id')->on('users');
            $table->foreign('schema_id')->references('id')->on('schemas');
            $table->foreign('sesi_id')->references('id')->on('sesis');
            $table->foreign('paket_skema_id')->references('id')->on('paket_skemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_ak06s');
    }
};
