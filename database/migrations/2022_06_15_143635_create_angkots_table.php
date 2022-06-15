<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngkotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angkots', function (Blueprint $table) {
            $table->id('id_angkot');
            $table->integer('no_angkot');
            $table->string('no_pol', 100);
            $table->string('merk', 255);
            $table->unsignedBigInteger('id_trayek')->nullable();
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
        Schema::dropIfExists('angkots');
    }
}
