<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiaEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('academia_enrollment', function (Blueprint $table) {
        $table->increments('id')->unique();

        $table->string('student_dni');
        $table->string('student_names');
        $table->string('student_lastname');
        $table->string('student_lastname_mother');
        $table->dateTime('student_birth');
        $table->string('student_district');
        $table->string('student_address');
        $table->string('student_phone_home');
        $table->string('student_phone_cell');
        $table->string('student_email');
        $table->string('student_gender')->nullable();
        $table->integer('student_year_finish_school');
        $table->string('student_school');
        $table->string('student_postulate_university');
        $table->string('student_postulate_profession');
        $table->string('student_last_academy')->nullable();




        $table->string('interest_university');
        $table->string('interest_university_key');

        $table->string('interest_venue');
        $table->string('interest_venue_key');

        $table->string('interest_cycle');
        $table->string('interest_cycle_key');
        
        $table->string('interest_turn')->nullable();




        $table->enum('attorney_type', ['mother', 'father', 'attorney', 'none']);
        $table->string('attorney_names')->nullable();
        $table->string('attorney_dni')->nullable();
        $table->string('attorney_phone_home')->nullable();
        $table->string('attorney_phone_cell')->nullable();
        $table->string('attorney_email')->nullable();
        $table->string('attorney_occupation')->nullable();
        $table->string('attorney_work_location')->nullable();
        $table->string('attorney_work_phone')->nullable();
        $table->string('attorney_phone_emergency')->nullable();

        $table->enum('visible', [0, 1])->default('1');
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
        Schema::dropIfExists('academia_enrollment');
    }
}
