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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('tempat_lahir_siswa');
            $table->date('tanggal_lahir_siswa');
            $table->string('alamat_siswa');
            $table->string('nama_orangtua');
            $table->bigInteger('no_handphone_orangtua');
            $table->string('kelas');
            // $table->bigInteger('id_pegawai');
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
        Schema::dropIfExists('siswas');
    }
};
