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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('foto_sekolah_events');
            $table->string('foto_sekolah_gallery');
            $table->string('foto_sekolah_prestasi');
            $table->string('foto_sekolah_fasilitas');
            $table->string('description_events');
            $table->string('description_prstasi');
            $table->string('description_fasilitass');
            $table->string('judul_events');
            $table->date('waktu_events');

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
        Schema::dropIfExists('sekolahs');
    }
};
