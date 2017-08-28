<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAssetIdColumnToAssetAccountabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asset_accountabilities', function(Blueprint $table){
            $table->integer('asset_id')->after('id')->unsigned()->nullable();
            $table->foreign('asset_id')->references('id')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumn('assets', 'asset_id')){
            Schema::table('assets', function(Blueprint $table){
                $table->dropForeign('asset_accountabilities_asset_id_foreign');
                $table->dropColumn('asset_id');
            });
        }
    }
}
