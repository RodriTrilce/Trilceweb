<?php

use Illuminate\Database\Seeder;

class ColegioVenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $c = array(
        array('id' => '1','name' => 'San Juan de Lurigancho Wiesse','slug' => 'san-juan-de-lurigancho-wiesse','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '2','name' => 'Jesús María (Salaverry)','slug' => 'jesus-maria-salaverry','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '3','name' => 'San Juan de Lurigancho','slug' => 'san-juan-de-lurigancho','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '4','name' => 'Santa Anita','slug' => 'santa-anita','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '5','name' => 'Salamanca','slug' => 'salamanca','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '6','name' => 'La Molina','slug' => 'la-molina','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '7','name' => 'Villa El Salvador','slug' => 'villa-el-salvador','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '8','name' => 'Villa María','slug' => 'villa-maria','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '9','name' => 'San Isidro','slug' => 'san-isidro','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '10','name' => 'Surco','slug' => 'surco','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '11','name' => 'Santa Beatriz (Roma)','slug' => 'santa-beatriz-roma','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '12','name' => 'Pro','slug' => 'pro','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '13','name' => 'Maranga','slug' => 'maranga','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '14','name' => 'Los Olivos','slug' => 'los-olivos','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '15','name' => 'Comas','slug' => 'comas','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '16','name' => 'Chorrillos','slug' => 'chorrillos','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '17','name' => 'Callao','slug' => 'callao','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '18','name' => 'Breña','slug' => 'brena','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '19','name' => 'Trujillo','slug' => 'trujillo','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '20','name' => 'Piura','slug' => 'piura','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '21','name' => 'Huancayo','slug' => 'huancayo','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '22','name' => 'Chanchamayo','slug' => 'chanchamayo','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '23','name' => 'Chiclayo','slug' => 'chiclayo','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL),
        array('id' => '24','name' => 'Arequipa','slug' => 'arequipa','status' => '1','sector' => 'noli','created_at' => NULL,'updated_at' => NULL)
      );

      for ($i=0; $i < count($c) ; $i++) {

        DB::table('colegio_venue')->insert([
          'name'          => $c[$i]['name'],
          'slug'          => $c[$i]['slug'],
          'status'          => $c[$i]['status'],
          'sector'          => $c[$i]['sector'],
        ]);
        
      }
      
      
      
    }
    
    
}









