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
        Schema::create('pertanyaan_ia03s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_kompetensi_id');
            $table->unsignedBigInteger('schema_id');
            $table->text('name');

            $table->timestamps();

            $table->foreign('unit_kompetensi_id')->references('id')->on('unit_kompetensis');
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
        Schema::dropIfExists('pertanyaan_ia03s');
    }
};
