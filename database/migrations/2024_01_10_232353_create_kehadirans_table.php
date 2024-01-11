<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehadiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->id();
            $table->string('jadwal_id');
            $table->string('ekstrakulikuler_id');
            $table->string('hari');
            $table->string('nama_siswa');
            $table->string('nis');
            $table->string('telp');
            $table->string('keterangan');
            $table->time('dari_jam');
            $table->time('sampai_jam');
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
        Schema::dropIfExists('kehadirans');
    }
}
