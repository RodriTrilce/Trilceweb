<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMathOlympicsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia_math_olympics', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['colegio', 'academia'])->default('academia');
            $table->string('venue');
            $table->integer('file_id')->nullable();
            $table->string('title');
            $table->string('grade');
            $table->string('inscription_url')->nullable();
            $table->string('inscription_group_url')->nullable();
            $table->timestamp('finish_at')->nullable();
            $table->string('isprovince')->nullable();
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
        Schema::dropIfExists('academia_math_olympics');
    }
}
