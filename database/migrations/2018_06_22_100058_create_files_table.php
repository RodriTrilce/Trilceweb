<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('files', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('filesable_id')->nullable()->unsigned();  // id polymorphic
          $table->string('filesable_type')->nullable();             // Model name polymorphic
          $table->string('token')->unique();                        // s770s0d897a990390ds9a949
          $table->string('type');                                   // image
          $table->string('mime');                                   // image/png
          $table->string('extension');                              // .png
          $table->string('location_folder');                        // static/blog/
          $table->string('location_driver')->default('local');      // static/blog/
          $table->string('name');                                   // Pasacalle Trilce
          $table->text('description')->nullable();                  // Foto principal del pasacalle
          $table->integer('size')->nullable();                      // bytes - max 2gb = integer max column type ::  2147483647
          $table->string('dimension')->nullable();                  // 290x290 -> thumb | 960x650 -> cover
          $table->enum('trash', [0, 1])->default('0');
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
        Schema::dropIfExists('files');
    }
}
