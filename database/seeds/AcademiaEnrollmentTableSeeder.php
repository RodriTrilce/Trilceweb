<?php

use Illuminate\Database\Seeder;

class AcademiaEnrollmentTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $c = array(
      array(
        'student_dni' => '74065855',
        'student_names' => 'Franco',
        'student_lastname' => 'Salcedo',
        'student_lastname_mother' => 'Castro',
        'student_birth' => '2018-06-15 12:51:56',
        'student_district' => 'Ancon',
        'student_address' => 'av calle sin nombre',
        'student_phone_home' => '3248914',
        'student_phone_cell' => '994439231',
        'student_email' => 'vasaleria@ddd.com',
        'student_year_finish_school' => '2014',
        'student_school' => 'San Cristobal',
        'student_postulate_university' => 'Universidad de Lima (ULIMA)',
        'student_postulate_profession' => 'Música',
        'student_last_academy' => 'aduni',
        'interest_university' => 'uni',
        'interest_venue' => 'santa beatriz',
        'interest_cycle' => 'Semestral',
        'interest_turn' => 'Mañana',
        'attorney_type' => 'father',
        'attorney_names' => 'Carlos santoyo',
        'attorney_dni' => '06578464',
        'attorney_phone_home' => '32489921',
        'attorney_phone_cell' => '995464001',
        'attorney_email' => 'santoyo@sdss.cm',
        'attorney_occupation' => 'Profesor',
        'attorney_work_location' => 'Trilce',
        'attorney_work_phone' => '41102401',
        'attorney_phone_emergency' => '0314644555',
        'visible' => '1',
        'created_at' => '2018-06-15 12:51:56',
        'updated_at' => '2018-06-15 12:51:56'
    )
  );

    for ($i=0; $i < count($c); $i++) {
      DB::table('academia_enrollment')->insert([
        'student_dni'           => $c[$i]['student_dni'],
        'student_names'          => $c[$i]['student_names'],
        'student_lastname'          => $c[$i]['student_lastname'],
        'student_lastname_mother'          => $c[$i]['student_lastname_mother'],
        'student_birth'               => $c[$i]['student_birth'],
        'student_district'          => $c[$i]['student_district'],
        'student_address'          => $c[$i]['student_address'],
        'student_phone_home'          => $c[$i]['student_phone_home'],
        'student_phone_cell'          => $c[$i]['student_phone_cell'],
        'student_email'          => $c[$i]['student_email'],
        'student_year_finish_school'          => $c[$i]['student_year_finish_school'],
        'student_school'          => $c[$i]['student_school'],
        'student_postulate_university'          => $c[$i]['student_postulate_university'],
        'student_postulate_profession'          => $c[$i]['student_postulate_profession'],
        'student_last_academy'          => $c[$i]['student_last_academy'],
        'interest_university'          => $c[$i]['interest_university'],
        'interest_venue'          => $c[$i]['interest_venue'],
        'interest_cycle'          => $c[$i]['interest_cycle'],
        'interest_turn'          => $c[$i]['interest_turn'],
        'attorney_type'          => $c[$i]['attorney_type'],
        'attorney_names'          => $c[$i]['attorney_names'],
        'attorney_dni'          => $c[$i]['attorney_dni'],
        'attorney_phone_home'          => $c[$i]['attorney_phone_home'],
        'attorney_phone_cell'          => $c[$i]['attorney_phone_cell'],
        'attorney_email'          => $c[$i]['attorney_email'],
        'attorney_occupation'          => $c[$i]['attorney_occupation'],
        'attorney_work_location'      => $c[$i]['attorney_work_location'],
        'attorney_work_phone'          => $c[$i]['attorney_work_phone'],
        'attorney_phone_emergency'          => $c[$i]['attorney_phone_emergency'],
        'visible'          => $c[$i]['visible']
      ]);
    }
  }
}
