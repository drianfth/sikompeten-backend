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
        Schema::create('jpemenuhan_dimensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_ak06_id');
            $table->unsignedBigInteger('keputusan_asesmen_id');
            $table->string('jawaban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jpemenuhan_dimensis');
    }
};
