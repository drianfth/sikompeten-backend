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
        Schema::create('unit_kompetensis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_unit')->unique();
            $table->string('judul_unit');
            $table->string('jenis_standar');
            $table->unsignedBigInteger('schema_id');
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
        Schema::dropIfExists('unit_kompetensis');
    }
};
