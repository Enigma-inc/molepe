<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustodiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('custodians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');   
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->softDeletes();        
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
        Schema::drop('custodians');        
    }
}
