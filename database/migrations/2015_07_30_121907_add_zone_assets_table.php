<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddZoneAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->integer('zone_id')->after('class_id')->unsigned()->nullable();;
            $table->foreign('zone_id')->references('id')->on('zones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets', function (Blueprint $table) {
            //Drop relationship
            $table->dropForeign('assets_zone_id_foreign');
            //Drop column
            $table->dropColumn('zone_id');
        });
    }
}
