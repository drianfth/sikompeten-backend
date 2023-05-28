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
        Schema::create('ia02s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schema_id');
            $table->string('path');
            $table->string('filename');
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
        Schema::dropIfExists('ia02s');
    }
};
