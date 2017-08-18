<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function(Blueprint $table) {
            $table->increments('id');
            $table->string('asset_number',50)->unique();
            $table->string('description',200);
            $table->string('dimensions',100)->nullable();
            $table->string('construction',150)->nullable();
            $table->string('specific_identifiers',200)->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assets');
    }
}
