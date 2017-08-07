<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAccountingInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountingInfo', function(Blueprint $table) {
            $table->increments('id');
            $table->string('funding_source',150)->nullable();
            $table->integer('useful_life')->nullable();;
            $table->enum('depreciation_method',['SL','SU','DB']);
            $table->integer('chart_of_accounts_id')->unsigned()->nullable();
            $table->foreign('chart_of_accounts_id')->references('id')->on('chart_of_accounts');
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
        Schema::drop('accountingInfo');
    }
}
