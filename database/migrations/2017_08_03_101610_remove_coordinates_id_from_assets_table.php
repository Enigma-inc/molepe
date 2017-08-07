<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveCoordinatesIdFromAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn('assets','coordinates_id'))
        {
            Schema::table('assets',function(Blueprint $table){
              $table->dropForeign('assets_coordinates_id_foreign');
              $table -> dropColumn('coordinates_id');
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
