<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAssetClassIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->integer('class_id')->after('specific_identifiers')->unsigned();
            $table->foreign('class_id')->references('id')->on('asset_subclasses');
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
            $table->dropForeign('assets_class_id_foreign');
            $table->dropColumn('class_id');
        });
    }
}
