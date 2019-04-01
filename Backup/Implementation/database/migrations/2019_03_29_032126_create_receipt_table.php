<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt', function (Blueprint $table) {
            $table->increments('receiptId');

            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references ('id')->on ('users');
            //booking ID
            $table->integer('id')->unsigned();
            $table->foreign('id')->references ('id')->on ('demos');

            $table->integer('PackId')->unsigned();
            $table->foreign('PackId')->references ('id')->on ('programs');
            $table->dateTime('bookdate');
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->string('nop',100);

            $table->integer('program_name');
            $table->float('price');
            $table->string('hotel');
            $table->string('totAmt');

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
        Schema::dropIfExists('receipt');
    }
}
