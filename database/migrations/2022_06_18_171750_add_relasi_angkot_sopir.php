<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelasiAngkotSopir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('angkots', function (Blueprint $table) {
            $table->foreign("id_sopir")->references('id_sopir')->on('sopirs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('angkots', function (Blueprint $table) {
            //
        });
    }
}
