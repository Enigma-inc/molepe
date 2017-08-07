<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParentAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->integer('parent_id')->after('specific_identifiers')->unsigned()->nullable();;
            $table->foreign('parent_id')->references('id')->on('assets');
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
            $table->dropForeign('assets_parent_id_foreign');
            //Drop column
            $table->dropColumn('parent_id');
        });
    }

}
