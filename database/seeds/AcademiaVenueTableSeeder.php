<?php

use Illuminate\Database\Seeder;

class AcademiaVenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $venues = array(
          array('id' => '1','name' => 'Santa Beatriz','horary' => '8:00 am','direction' => 'Av. Arequipa 1250','phone' => '6198-112','logitude' => '-12.077144155990904','latitude' => '-77.03597640361784','status' => '1','sector' => 'noli','created_at' => '2018-03-26 05:00:00','updated_at' => NULL),
          array('id' => '2','name' => 'Los Olivos','horary' => '8:00 am','direction' => 'Av. Tomas Valle 841','phone' => '619-8109','logitude' => '-12.010900','latitude' => '-77.068304','status' => '1','sector' => 'noli','created_at' => '2018-03-26 05:00:00','updated_at' => NULL),
          array('id' => '3','name' => 'Comas','horary' => '8:00 am','direction' => 'Av. Universitaria 6102','phone' => '6198-115','logitude' => '-11.951141962664558','latitude' => '-77.05970018247427','status' => '1','sector' => 'noli','created_at' => '2018-03-26 05:00:00','updated_at' => NULL),
          array('id' => '4','name' => 'Torrico','horary' => '8:00 am','direction' => 'Jr. Rufino Torrico 862','phone' => '6198-113','logitude' => '-12.049882','latitude' => '-77.038304','status' => '1','sector' => 'noli','created_at' => '2018-03-26 05:00:00','updated_at' => NULL),
          array('id' => '5','name' => 'Marsano','horary' => '8:00 am','direction' => 'Av. Tomás Marsano 4773, Surco','phone' => '6198-114','logitude' => '-12.145226983978073','latitude' => '-76.98833732942404','status' => '1','sector' => 'noli','created_at' => '2018-03-26 05:00:00','updated_at' => NULL),
          array('id' => '6','name' => 'Villa el Salvador','horary' => '8:00 am','direction' => 'Av. Pastor Sevilla s/n Mz. D Lt. 3
        (Frente al Hospital de la Solidaridad)','phone' => '619-8106','logitude' => '-12.194664925191766','latitude' => '-76.96023216214178','status' => '1','sector' => 'noli','created_at' => '2018-03-26 05:00:00','updated_at' => NULL),
          array('id' => '7','name' => 'San Isidro','horary' => '8:00 am','direction' => 'Av. Arequipa 3505 - San Isidro','phone' => '422-5994','logitude' => '-12.100440','latitude' => '-77.031920','status' => '1','sector' => 'noli','created_at' => '2018-03-26 05:00:00','updated_at' => NULL)
        );
        
        for ($i=0; $i < count($venues); $i++) {
          DB::table('academia_venue')->insert([
            'name'          => $venues[$i]['name'],
            'horary'          => $venues[$i]['horary'],
            'direction'          => $venues[$i]['direction'],
            'phone'          => $venues[$i]['phone'],
            'logitude'          => $venues[$i]['logitude'],
            'latitude'          => $venues[$i]['latitude'],
            'status'          => $venues[$i]['status'],
            'sector'          => $venues[$i]['sector']
          ]);
        }


    }
}
