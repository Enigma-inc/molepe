<?php

use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJournals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function(Blueprint $table) {
            $table->increments('id');
            $table->enum('journal_type',['GJ','AR','AP','SJ','PJ'])->default('GJ');
            $table->string('trans_ref');
            $table->date('trans_date')->default(Carbon::now());
            $table->enum('DC',['D','C']);
            $table->date('post_date')->nullable();
            $table->double('amount',13,2);
            $table->integer('chart_of_accounts_id')->unsigned();

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
        Schema::drop('journals');
    }
}
