<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccountabilityIdColumnToAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->integer('asset_accountability_id')->after('functional_group_id')->unsigned()->nullable();
            $table->foreign('asset_accountability_id')->references('id')->on('asset_accountabilities');
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
            $table->dropForeign('assets_asset_accountability_id_foreign');
            $table->dropColumn('asset_accountability_id');
        });
    }
}
