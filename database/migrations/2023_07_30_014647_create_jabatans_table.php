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
        Schema::create('jabatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        DB::table('jabatans')->insert(
            array(
                'id'=>'1',
                'nama'=>'Wali Kelas A'
            )
        );

        DB::table('jabatans')->insert(
            array(
                'id'=>'2',
                'nama'=>'Wali Kelas B'
            )
        );

        DB::table('jabatans')->insert(
            array(
                'id'=>'3',
                'nama'=>'Kepala Sekolah'
            )
        );

        DB::table('jabatans')->insert(
            array(
                'id'=>'4',
                'nama'=>'Lainnya'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
};
