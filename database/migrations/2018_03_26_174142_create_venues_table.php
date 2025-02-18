<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia_venue', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('horary');
            $table->text('direction');
            $table->string('phone');
            $table->string('logitude');
            $table->string('latitude');
            $table->integer('status')->default('1');
            $table->enum('sector', ['noli', 'lazo', 'rivero'])->default('noli');
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
        Schema::dropIfExists('academia_venue');
    }
}
