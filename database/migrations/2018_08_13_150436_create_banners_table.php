<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('banners', function (Blueprint $table) {
             $table->increments('id');
             $table->string('type');
             $table->string('title')->nullable();
             $table->text('content');
//             $table->string('link')->nullable();
//             $table->integer('file_id')->unsigned();
             $table->integer('position');
             $table->integer('state')->default('0');
             $table->integer('deleted')->nullable()->default('0');
             $table->timestamp('start')->nullable();
             $table->timestamp('expire')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
