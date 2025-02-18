<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiaSimulacrumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia_simulacrum', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('university_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->text('url');
            $table->timestamps();
        });
        
        Schema::table('academia_simulacrum', function(Blueprint $table)
        {
          $table->foreign('university_id')->references('id')->on('universities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academia_simulacrum');
    }
}
