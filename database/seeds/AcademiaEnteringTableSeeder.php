<?php

use Illuminate\Database\Seeder;

class AcademiaEnteringTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      DB::table('academia_entering')->insert([
          'university_id_entering' => 1,
          'entering'      => '201',
          'name'          => 'Franco',
          'lastname'      => 'Salcedo',
          'lastname_second' => 'Castro',
          'profession'      => 'Ing. de Software'
      ]);

      DB::table('academia_entering')->insert([
          'university_id_entering' => 1,
          'entering'      => '201',
          'name'          => 'Carlos',
          'lastname'      => 'Salcedo',
          'lastname_second' => 'Castro',
          'profession'      => 'Ing. de Software'
      ]);

      DB::table('academia_entering')->insert([
          'university_id_entering' => 1,
          'entering'      => '201',
          'name'          => 'Franco',
          'lastname'      => 'Salcedo',
          'lastname_second' => 'Castro',
          'profession'      => 'Ing. de Software'
      ]);

    }
}
