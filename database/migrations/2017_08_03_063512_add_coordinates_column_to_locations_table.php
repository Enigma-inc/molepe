<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoordinatesColumnToLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locations', function(Blueprint $table){
            $table->double('latitude')->nullable()
                  ->after('description');
            $table->double('longitude')->nullable()
                  ->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locations', function(Blueprint $table){
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
        });
    }
}
