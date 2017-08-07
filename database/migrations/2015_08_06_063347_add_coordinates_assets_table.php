<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoordinatesAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->integer('coordinates_id')
                  ->after('location_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('coordinates_id')
                ->references('id')
                ->on('coordinates');
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
            //drop column
            if(Schema::hasColumn('assets','coordinates_id')){
            $table->dropColumn('coordinates_id');
            }
        });
    }
}
