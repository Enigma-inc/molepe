<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetAccountabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_accountabilities', function(Blueprint $table){
            $table->increments('id');
            $table->text('restrictions');
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('custodian_id')->unsigned()->nullable();
            $table->integer('cost_center_id')->unsigned()->nullable();
            $table->integer('section_id')->unsigned()->nullable();
            $table->timestamps(); 
        });

        Schema::table('asset_accountabilities', function(Blueprint $table) {
            $table->foreign('department_id')->references('id')->on('departments');            
            $table->foreign('custodian_id')->references('id')->on('custodians');
            $table->foreign('cost_center_id')->references('id')->on('cost_centers');
            $table->foreign('section_id')->references('id')->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asset_accountabilities');
    }
}