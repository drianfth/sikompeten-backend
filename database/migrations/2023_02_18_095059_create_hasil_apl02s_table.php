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
            // $table->id();
            $table->string('id')->primary();
            $table->unsignedBigInteger('schema_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('paket_asesmen_id');
            $table->string('name'); 
            $table->boolean('konfirmasi')->default(false);
            $table->string('status')->default('menunggu');
           


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
