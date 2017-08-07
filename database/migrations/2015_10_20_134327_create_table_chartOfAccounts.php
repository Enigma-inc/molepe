<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChartOfAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_of_accounts', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();;
            $table->foreign('parent_id')->references('id')->on('chart_of_accounts');

            $table->enum('account_type',['A','E','XA','RV','IM']);//A=ASSETS, E=EXPENSES, XA=CONTRA-ASSETS, RV=REVENUE, IM=
            $table->double('balance',13,2);
            $table->string('description',150)->nullable();
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
        Schema::drop('chart_of_accounts');
    }
}
