<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListaDriver extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
/*
      Schema::create('lista_driver', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('count')->default('0');
          $table->timestamps();
      });
*/
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('lista_driver');
  }
}
