<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetSubclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_subclasses', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('min_useful_life')->nullable();
            $table->integer('max_useful_life')->nullable();

            //Foreign keys
             $table->integer('asset_class_id')->unsigned()->nullable();
             $table->foreign('asset_class_id')->references('id')->on('asset_classes');
             $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.A
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asset_subclasses');
    }
}
