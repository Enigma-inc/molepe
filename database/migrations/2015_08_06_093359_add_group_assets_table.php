<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGroupAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->integer('functional_group_id')->after('coordinates_id')->unsigned()->nullable();;
            $table->foreign('functional_group_id')->references('id')->on('asset_groups');
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
            $table->dropForeign('assets_functional_group_id_foreign');
            //Drop column
            $table->dropColumn('functional_group_id');
        });
    }
}
