<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnteringModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia_entering', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('university_id_entering')->unsigned();
            $table->integer('entering');
            $table->string('name');
            $table->string('lastname');
            $table->string('lastname_second');
            $table->string('profession');
            $table->timestamps();
        });
        
        Schema::table('academia_entering', function(Blueprint $table)
        {
          $table->foreign('university_id_entering')->references('id')->on('universities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academia_entering');
    }
}
