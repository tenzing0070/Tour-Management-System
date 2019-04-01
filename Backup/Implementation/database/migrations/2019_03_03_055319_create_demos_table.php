<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demos', function (Blueprint $table) {
             $table->increments('id');
            

  
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references ('id')->on ('users');
            
            $table->dateTime('bookdate');
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->string('nop',100);

            $table->integer('PackId')->unsigned();
            $table->foreign('PackId')->references ('id')->on ('programs');
            
            $table->rememberToken();
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
        Schema::dropIfExists('demos');
    }
}
