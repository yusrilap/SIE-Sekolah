<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkstrakulikulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekstrakulikulers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ekstrakulikuler');
            $table->timestamps();

            // Relation table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ekstrakulikulers');
    }
}