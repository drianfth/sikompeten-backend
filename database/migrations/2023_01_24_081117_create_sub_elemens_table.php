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
        Schema::create('sub_elemens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('elemen_id');
            $table->unsignedBigInteger('schema_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('schema_id')->references('id')->on('schemas');
            $table->foreign('elemen_id')->references('id')->on('elemens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_elemens');
    }
};
