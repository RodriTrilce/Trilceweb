<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColegioVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('colegio_venue', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('slug');
          $table->text('content')->nullable();
          $table->integer('status')->default('1');
          $table->enum('sector', ['noli', 'lazo', 'rivero'])->default('noli');
          $table->integer('vacations')->default('0')->nullable();
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
        Schema::dropIfExists('colegio_venue');
    }
}
