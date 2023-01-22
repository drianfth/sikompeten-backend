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
        Schema::create('paket_asesmens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schema_id');
            $table->string('name');
            $table->date('tanggal')->nullable();
            $table->string('asesor1_id')->nullable();
            $table->string('asesor2_id')->nullable();
            $table->string('tuk')->nullable();
            $table->timestamps();

            $table->foreign('schema_id')->references('id')->on('schemas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_asesmens');
    }
};
