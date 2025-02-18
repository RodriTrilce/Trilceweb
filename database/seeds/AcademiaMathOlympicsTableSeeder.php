<?php

use Illuminate\Database\Seeder;
use App\Models\Academia\MathOlympicsModel;

class AcademiaMathOlympicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $x = [
        [
          'id' => '1',
          'type' => 'academia',
          'venue' => 'Comas',
          'title' => 'I OLIMPIADA DE MATEMÁTICA - IE "ESTHER FESTINI DE RAMOS OCAMPO"',
          'grade' => '1.° sec. a 5.° sec.',
          'finish_at' => '2018-06-02 08:00:00'
        ],

        [
          'id' => '2',
          'type' => 'academia',
          'venue' => 'SAN JUAN DE LURIGANCHO',
          'title' => 'III OLIMPIADA DE MATEMÁTICA - IEP INTERNACIONAL ELIM',
          'grade' => '1.° prim. a 5.° sec.',
          'finish_at' => '2018-06-09 08:00:00'
        ],


        [
          'id' => '3',
          'type' => 'academia',
          'venue' => 'Chimbote',
          'title' => 'V OLIMPIADA DE MATEMÁTICA 7 IEP "EL SEÑOR ES MI PASTOR"',
          'grade' => '1.° prim. a 5.° sec.',
          'finish_at' => '2018-06-23 08:00:00'
        ],


        [
          'id' => '4',
          'type' => 'academia',
          'venue' => 'Huánuco',
          'title' => 'I OLIMPIADA DE MATEMÁTICA - IEP SAN PABLO',
          'grade' => '1.° prim. a 5.° sec.',
          'finish_at' => '2018-08-11 08:00:00'
        ],


        [
          'id' => '5',
          'type' => 'academia',
          'venue' => 'Barranco',
          'title' => 'I OLIMPIADA DE MATEMÁTICA - IE ENRIQUE ARNÁEZ NAVEDA',
          'grade' => '1.° sec. a 5.° sec.',
          'finish_at' => '2018-08-18 08:00:00'
        ],


        [
          'id' => '7',
          'type' => 'academia',
          'venue' => 'Huancayo',
          'title' => 'VIII OLIMPIADA DE MATEMÁTICA - IEP TRILCE',
          'grade' => '1.° prim. a 5.° sec.',
          'finish_at' => '2018-09-22 08:00:00'
        ],


        [
          'id' => '8',
          'type' => 'academia',
          'venue' => 'Comas',
          'title' => 'II OLIMPIADA DE MATEMÁTICA - IE N.° 2038 INCA GARCILASO DE LA VEGA',
          'grade' => '5.° prim. a 5.° sec.',
          'finish_at' => '2018-09-29 08:00:00'
        ],


        [
          'id' => '9',
          'type' => 'academia',
          'venue' => 'Ventanilla',
          'title' => 'I OLIMPIADA DE MATEMÁTICA - IEP NUESTRA SEÑORA DE GUADALUPE DE PACHACÚTEC',
          'grade' => '3.° prim. a 5.° sec.',
          'finish_at' => '2018-10-13 08:00:00'
        ],


        [
          'id' => '10',
          'type' => 'academia',
          'venue' => 'Chorrrillos',
          'title' => 'XX OLIMPIADA DE MATEMÁTICA - IE N.° 7075 JUAN PABLO II',
          'grade' => '1.° prim. a 5.° sec.',
          'finish_at' => '2018-10-20 08:00:00'
        ],


        [
          'id' => '11',
          'type' => 'academia',
          'venue' => 'VILLA EL SALVADOR',
          'title' => 'II OLIMPIADA DE MATEMÁTICA - IEP AMERICAN SYSTEMS',
          'grade' => '3.° prim. a 5.° sec.',
          'finish_at' => '2018-10-27 08:00:00'
        ],

        [
          'id' => '12',
          'type' => 'academia',
          'venue' => 'Callao',
          'title' => 'I OLIMPIADA DE MATEMÁTICA - IE N.° 5024 FRANCISCO MIRO QUESADA CANTUARIAS',
          'grade' => '1.° prim. a 6.° prim.',
          'finish_at' => '2018-11-03 08:00:00'
        ]
      ];


      for($i=0;$i<count($x);$i++){
        $n = new MathOlympicsModel;
        $n->type = $x[$i]['type'];
        $n->venue = $x[$i]['venue'];
        $n->title = $x[$i]['title'];
        $n->grade = $x[$i]['grade'];
        $n->finish_at = $x[$i]['finish_at'];
        $n->save();
      }

    }
}
