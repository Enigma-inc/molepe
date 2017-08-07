<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAssetAccountingInfoId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accountingInfo', function (Blueprint $table) {
            $table->string('asset_number',30)->after('chart_of_accounts_id')->unique()->nullable();;
            $table->foreign('asset_number')->references('asset_number')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accountingInfo', function (Blueprint $table) {
            //Drop relationship
            $table->dropForeign('accountingInfo_asset_number_foreign');
            //Drop column
            $table->dropColumn('asset_number');
        });
    }
}
