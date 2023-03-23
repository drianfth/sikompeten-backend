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
        Schema::create('sesis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_skema_id');
            $table->unsignedBigInteger('asesor1_id')->nullable();
            $table->unsignedBigInteger('asesor2_id')->nullable();
            $table->string('nama_sesi');
            $table->string('jam');
            $table->boolean('open')->default(false);

            $table->timestamps();
            $table->foreign('paket_skema_id')->references('id')->on('paket_skemas');
            $table->foreign('asesor1_id')->references('id')->on('users');
            $table->foreign('asesor2_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sesis');
    }
};
