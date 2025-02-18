<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $u = array(
        array('id' => '1','name' => 'Universidad Nacional de Ingeniería','short_name' => 'UNI','description' => 'La Universidad Nacional de Ingeniería es una universidad pública ubicada en la ciudad de Lima, Perú.
      ','created_at' => NULL,'updated_at' => NULL),
        array('id' => '2','name' => 'Universidad Nacional Mayor de San Marcos','short_name' => 'San Marcos','description' => 'Historia de la Universidad Nacional Mayor de San Marcos
      La Universidad Nacional Mayor de San Marcos, Decana de América, fundada el 12 de mayo de 1551, fue el inicio de la historia universitaria del continente. Los dominicos en sus conventos del Cusco, principal ciudad peruana en el siglo XVI, y de Lima, estudiaban Artes y Teología para ejercitar a los antiguos miembros y preparar a los novicios de la Orden. El incremento de los estudios superiores determinó que, en el capítulo del célebre convento cusqueño (01/07/1548), Fray Tomás de San Martín solicitase fundar una universidad o Estudio General en Lima o también llamada Ciudad de los Reyes.','created_at' => NULL,'updated_at' => NULL),
        array('id' => '3','name' => 'Pontificia Universidad Católica del Perú','short_name' => 'PUCP','description' => 'La PUCP es reconocida por su pluralidad, la calidad de su enseñanza, investigaciones, responsabilidad social, apoyo a la cultura y su acción inspirada en la doctrina social de la iglesia. Es una de las 25 mejores de América Latina y la única peruana entre las 500 mejores del mundo en los rankings internacionales.','created_at' => NULL,'updated_at' => NULL)
      );

      for ($i=0; $i < count($u) ; $i++) {
        DB::table('universities')->insert([
          'name' => $u[$i]['name'],
          'short_name' => $u[$i]['short_name'],
          'description' => $u[$i]['description'],
        ]);
      }

      
    }
}
