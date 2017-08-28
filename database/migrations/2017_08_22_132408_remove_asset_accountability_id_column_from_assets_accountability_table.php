<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveAssetAccountabilityIdColumnFromAssetsAccountabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        if(Schema::hasColumn('asset_accountabilities','asset_accountability_id'))
        {
            Schema::table('asset_accountabilities',function(Blueprint $table){
              $table->dropForeign('assets_asset_accountability_id_foreign');
              $table->dropColumn('asset_accountability_id');
            });
        }

        if(Schema::hasTable('coordinates'))
        {
            Schema::drop('coordinates');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
