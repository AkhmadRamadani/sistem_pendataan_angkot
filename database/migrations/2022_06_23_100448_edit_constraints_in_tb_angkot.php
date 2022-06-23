<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditConstraintsInTbAngkot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('angkots', function (Blueprint $table) {
            $table->dropForeign('angkots_id_sopir_foreign');
            $table->dropForeign('angkots_id_trayek_foreign');

            $table->foreign("id_sopir")->references('id_sopir')->on('sopirs')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign("id_trayek")->references('id_trayek')->on('trayeks')->nullOnDelete()->cascadeOnUpdate();
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
