<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnsIdAngkotTbSopir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sopirs', function (Blueprint $table) {
            $table->dropForeign('sopirs_id_angkot_foreign');
            $table->dropColumn('id_angkot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sopirs', function (Blueprint $table) {
            
        });
    }
}
