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
            //  $table->string('name',100);
            // $table->string('education',100);
            // $table->string('age',100);

            // $table->string('packagename',100);
            // $table->string('stay',100);
            // $table->string('cost',100);
             
            $table->string('bookdate',100);
            $table->string('duration',100);
            $table->string('nop',100);


            
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
