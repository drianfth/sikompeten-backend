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
        Schema::create('hasil_apl01s', function (Blueprint $table) {
            // $table->id();
            $table->string('id')->primary();
            $table->unsignedBigInteger('schema_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sesi_id');
            $table->boolean('konfirmasi')->default(false);
            $table->string('name');
            $table->string('kk_ktp_paspor');
            $table->string('tempat_lhr');
            $table->string('tgl_lahir');
            $table->string('jns_kelamin');
            $table->string('kebangsaan');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->string('pendidikan');
            $table->string('kode_pos');
            $table->string('perusahaan');
            $table->string('jabatan');
            $table->string('almt_kantor')->nullable();
            $table->string('telp_kantor')->nullable();
            $table->string('email_kantor')->nullable();
            $table->string('kode_pos_kantor')->nullable();
            $table->string('fax')->nullable();
            $table->string('status')->default('menunggu');
            $table->string('tujuan_asesmen')->nullable();
            $table->string('link');
            // $table->string('kelengkapan2')->nullable();
            // $table->string('kelengkapan3')->nullable();
            // $table->string('kelengkapan4')->nullable();
            // $table->string('kelengkapan5')->nullable();

            $table->timestamps('');


            $table->foreign('schema_id')->references('id')->on('schemas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sesi_id')->references('id')->on('sesis');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_apl01s');
    }
};
