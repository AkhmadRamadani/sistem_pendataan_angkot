<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditConstraintsInTbPerjalanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perjalanans', function (Blueprint $table) {
            $table->dropForeign('perjalanans_id_sopir_foreign');

            $table->foreign("id_sopir")->references('id_sopir')->on('sopirs')->nullOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perjalanans', function (Blueprint $table) {
            //
        });
    }
}
