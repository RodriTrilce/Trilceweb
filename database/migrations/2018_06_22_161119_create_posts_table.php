<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('posts', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('user_id')->unsigned();
           $table->integer('file_id')->unsigned()->nullable();
           $table->enum('site', ['academia', 'colegio']);
           $table->string('type')->default('blog');
           $table->string('title');
           $table->longText('content');
           $table->string('slug');
           $table->text('tags')->nullable();
           $table->integer('view')->default('0');
           $table->enum('marker', [0, 1])->default('0');
           $table->enum('visible', [0, 1])->default('1');
           $table->enum('approved', [0, 1])->default('0');
           $table->timestamps();
       });

/*
       Schema::table('posts', function(Blueprint $table)
       {
         //$table->foreign('id_user')->references('id')->on('users');
         //$table->foreign('id_image_marker')->references('id')->on('files');
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
        Schema::dropIfExists('posts');
    }
}
