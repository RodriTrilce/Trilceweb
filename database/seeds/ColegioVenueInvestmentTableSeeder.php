<?php

use Illuminate\Database\Seeder;

class ColegioVenueInvestmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $c = array(
        array('id' => '1','idvenue' => '1','range' => 'Primaria','admissionfee' => '','enrollment' => 'S/ 450','monthlypayment' => '(10 pensiones) S/ 450','created_at' => NULL,'updated_at' => NULL),
        array('id' => '2','idvenue' => '1','range' => 'Secundaria De 1<sup>er</sup> a 3<sup>er</sup> año','admissionfee' => '','enrollment' => 'S/ 480','monthlypayment' => '(10 pensiones) S/ 480','created_at' => NULL,'updated_at' => NULL),
        array('id' => '3','idvenue' => '1','range' => 'Secundaria De 4to a 5to año','admissionfee' => '','enrollment' => 'S/ 500','monthlypayment' => '(10 pensiones) S/ 500','created_at' => NULL,'updated_at' => NULL),
        array('id' => '4','idvenue' => '2','range' => 'Primaria a 4.<sup>o</sup> año de Secundaria','admissionfee' => '','enrollment' => 'S/ 545','monthlypayment' => '(10 pensiones) - S/ 545','created_at' => NULL,'updated_at' => NULL),
        array('id' => '5','idvenue' => '2','range' => 'Secundaria: 5.<sup>o</sup> sistema Universitario','admissionfee' => '','enrollment' => 'S/ 555','monthlypayment' => '(10 pensiones) - S/ 555','created_at' => NULL,'updated_at' => NULL),
        array('id' => '6','idvenue' => '3','range' => 'Primaria: De 1.<sup>o</sup> a 6.<sup>o</sup> Grado','admissionfee' => '','enrollment' => 'S/ 420','monthlypayment' => '(10 pensiones) - S/ 420','created_at' => NULL,'updated_at' => NULL),
        array('id' => '7','idvenue' => '3','range' => 'Secundaria: De 1.<sup>o</sup> a 3.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 450','monthlypayment' => '(10 pensiones) - S/ 450','created_at' => NULL,'updated_at' => NULL),
        array('id' => '8','idvenue' => '3','range' => 'Secundaria: De 4.<sup>o</sup> y sistema 5.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 480','monthlypayment' => '(10 pensiones) - S/ 480','created_at' => NULL,'updated_at' => NULL),
        array('id' => '9','idvenue' => '4','range' => 'Primaria','admissionfee' => 'S/ 450','enrollment' => 'S/ 490','monthlypayment' => '(10 pensiones) - S/ 490','created_at' => NULL,'updated_at' => NULL),
        array('id' => '10','idvenue' => '4','range' => 'Secundaria','admissionfee' => 'S/ 450','enrollment' => 'S/ 510','monthlypayment' => '(10 pensiones) - S/ 510','created_at' => NULL,'updated_at' => NULL),
        array('id' => '11','idvenue' => '5','range' => 'Inicial: (5 años)','admissionfee' => 'S/ 450','enrollment' => 'S/ 490','monthlypayment' => '(10 pensiones) - S/ 490','created_at' => NULL,'updated_at' => NULL),
        array('id' => '12','idvenue' => '5','range' => 'Primaria y Secundaria','admissionfee' => 'S/ 450','enrollment' => 'S/ 570','monthlypayment' => '(10 pensiones) - S/ 570','created_at' => NULL,'updated_at' => NULL),
        array('id' => '13','idvenue' => '6','range' => 'Inicial (5 años)','admissionfee' => 'S/ 700','enrollment' => 'S/ 600','monthlypayment' => '(10 pensiones) - S/ 700','created_at' => NULL,'updated_at' => NULL),
        array('id' => '14','idvenue' => '6','range' => 'Primaria','admissionfee' => 'S/ 700','enrollment' => 'S/ 810','monthlypayment' => '(10 pensiones) - S/ 810','created_at' => NULL,'updated_at' => NULL),
        array('id' => '15','idvenue' => '6','range' => 'Secundaria','admissionfee' => 'S/ 700','enrollment' => 'S/ 840','monthlypayment' => '(10 pensiones) - S/ 840','created_at' => NULL,'updated_at' => NULL),
        array('id' => '16','idvenue' => '7','range' => 'Inicial (3, 4 y 5 años), Primaria y Secundaria','admissionfee' => '','enrollment' => 'S/ 430','monthlypayment' => '(10 pensiones) - S/ 430','created_at' => NULL,'updated_at' => NULL),
        array('id' => '17','idvenue' => '8','range' => 'Inicial, Primaria y Secundaria','admissionfee' => '','enrollment' => 'S/ 420','monthlypayment' => '(10 pensiones) - S/ 420','created_at' => NULL,'updated_at' => NULL),
        array('id' => '18','idvenue' => '9','range' => 'Secundaria: De 1.<sup>o</sup> a Sistema 5.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 620','monthlypayment' => '(10 pensiones) - S/ 620','created_at' => NULL,'updated_at' => NULL),
        array('id' => '19','idvenue' => '10','range' => 'Primaria (Caminos del Inca)','admissionfee' => '','enrollment' => 'S/ 590','monthlypayment' => '(10 pensiones) - S/ 590','created_at' => NULL,'updated_at' => NULL),
        array('id' => '20','idvenue' => '10','range' => 'Secundaria (Marsano)','admissionfee' => '','enrollment' => 'S/ 620','monthlypayment' => '(10 pensiones) - S/ 620','created_at' => NULL,'updated_at' => NULL),
        array('id' => '21','idvenue' => '11','range' => 'Secundaria: De 1.<sup>o</sup> a 4.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 515','monthlypayment' => '(10 pensiones) - S/ 515','created_at' => NULL,'updated_at' => NULL),
        array('id' => '22','idvenue' => '11','range' => 'Secundaria: 5.<sup>o</sup> Sistema Universitario','admissionfee' => '','enrollment' => 'S/ 525','monthlypayment' => '(10 pensiones) - S/ 525','created_at' => NULL,'updated_at' => NULL),
        array('id' => '23','idvenue' => '12','range' => 'Secundaria: De 1.<sup>o</sup> a 4.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 460','monthlypayment' => '(10 pensiones) - S/ 460','created_at' => NULL,'updated_at' => NULL),
        array('id' => '24','idvenue' => '12','range' => 'Secundaria: 5.<sup>o</sup> Sistema Universitario','admissionfee' => '','enrollment' => 'S/ 470','monthlypayment' => '(10 pensiones) - S/ 470','created_at' => NULL,'updated_at' => NULL),
        array('id' => '25','idvenue' => '13','range' => 'Secundaria: De 1.<sup>o</sup> a 4.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 545','monthlypayment' => '(10 pensiones) - S/ 545','created_at' => NULL,'updated_at' => NULL),
        array('id' => '26','idvenue' => '13','range' => 'Secundaria: 5.<sup>o</sup> Sistema Universitario','admissionfee' => '','enrollment' => 'S/ 555','monthlypayment' => '(10 pensiones) - S/ 555','created_at' => NULL,'updated_at' => NULL),
        array('id' => '27','idvenue' => '14','range' => 'Primaria a 4.<sup>o</sup> año de Secundaria','admissionfee' => '','enrollment' => 'S/ 545','monthlypayment' => '(10 pensiones) - S/ 545','created_at' => NULL,'updated_at' => NULL),
        array('id' => '28','idvenue' => '14','range' => 'Secundaria: 5.<sup>o</sup> Sistema Universitario','admissionfee' => '','enrollment' => 'S/ 555','monthlypayment' => '(10 pensiones) - S/ 555','created_at' => NULL,'updated_at' => NULL),
        array('id' => '29','idvenue' => '15','range' => 'Primaria','admissionfee' => '','enrollment' => 'S/ 460','monthlypayment' => '(10 pensiones) - S/ 460','created_at' => NULL,'updated_at' => NULL),
        array('id' => '30','idvenue' => '15','range' => 'Secundaria: 1.<sup>o</sup> a 4.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 470','monthlypayment' => '(10 pensiones) - S/ 470','created_at' => NULL,'updated_at' => NULL),
        array('id' => '31','idvenue' => '15','range' => 'Secundaria: 5.<sup>o</sup> Sistema Universitario','admissionfee' => '','enrollment' => 'S/ 480','monthlypayment' => '(10 pensiones) - S/ 480','created_at' => NULL,'updated_at' => NULL),
        array('id' => '32','idvenue' => '16','range' => 'Primaria a 4.<sup>o</sup> año de Secundaria','admissionfee' => '','enrollment' => 'S/ 460','monthlypayment' => '(10 pensiones) - S/ 460','created_at' => NULL,'updated_at' => NULL),
        array('id' => '33','idvenue' => '16','range' => 'Secundaria: 5.<sup>o</sup> Sistema Universitario','admissionfee' => '','enrollment' => 'S/ 470','monthlypayment' => '(10 pensiones) - S/ 470','created_at' => NULL,'updated_at' => NULL),
        array('id' => '34','idvenue' => '17','range' => 'Secundaria: De 1.<sup>o</sup> a 4.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 435','monthlypayment' => '(10 pensiones) - S/ 435','created_at' => NULL,'updated_at' => NULL),
        array('id' => '35','idvenue' => '17','range' => 'Secundaria: 5.<sup>o</sup> Sistema Universitario','admissionfee' => '','enrollment' => 'S/ 445','monthlypayment' => '(10 pensiones) - S/ 445','created_at' => NULL,'updated_at' => NULL),
        array('id' => '36','idvenue' => '18','range' => 'Secundaria: De 1.<sup>o</sup> a 5.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 415','monthlypayment' => '(10 pensiones) - S/ 415','created_at' => NULL,'updated_at' => NULL),
        array('id' => '37','idvenue' => '19','range' => 'Primaria (Primavera)','admissionfee' => 'S/ 550','enrollment' => 'S/ 480','monthlypayment' => '(10 pensiones) - S/ 480','created_at' => NULL,'updated_at' => NULL),
        array('id' => '38','idvenue' => '19','range' => 'Secundaria (Primavera)','admissionfee' => 'S/ 550','enrollment' => 'S/ 510','monthlypayment' => 'S/ 510','created_at' => NULL,'updated_at' => NULL),
        array('id' => '39','idvenue' => '19','range' => 'Primaria (Santa María)','admissionfee' => 'S/ 400','enrollment' => 'S/ 350','monthlypayment' => '(10 pensiones) - S/ 350','created_at' => NULL,'updated_at' => NULL),
        array('id' => '40','idvenue' => '19','range' => 'Secundaria (Santa María)','admissionfee' => 'S/ 400
      ','enrollment' => 'S/ 390','monthlypayment' => '(10 pensiones) - S/ 390','created_at' => NULL,'updated_at' => NULL),
        array('id' => '41','idvenue' => '20','range' => 'Primaria','admissionfee' => 'S/ 250','enrollment' => 'S/ 380','monthlypayment' => '(10 pensiones) - S/ 380','created_at' => NULL,'updated_at' => NULL),
        array('id' => '42','idvenue' => '20','range' => 'Secundaria','admissionfee' => 'S/ 250','enrollment' => 'S/ 400','monthlypayment' => '(10 pensiones) - S/ 400','created_at' => NULL,'updated_at' => NULL),
        array('id' => '43','idvenue' => '21','range' => 'De 1.<sup>o</sup> a 4.<sup>o</sup> año','admissionfee' => '','enrollment' => 'S/ 370','monthlypayment' => '(10 pensiones) - S/ 370','created_at' => NULL,'updated_at' => NULL),
        array('id' => '44','idvenue' => '21','range' => 'Secundaria: 5.<sup>o</sup> Sistema Universitario','admissionfee' => '','enrollment' => 'S/ 380','monthlypayment' => '(10 pensiones) - S/ 380','created_at' => NULL,'updated_at' => NULL),
        array('id' => '45','idvenue' => '22','range' => 'Primaria a 4.<sup>o</sup> año de Secundaria','admissionfee' => '','enrollment' => 'S/ 320','monthlypayment' => '(10 pensiones) - S/ 320','created_at' => NULL,'updated_at' => NULL),
        array('id' => '46','idvenue' => '22','range' => 'Secundaria: 5.<sup>o</sup> Sistema Universitario','admissionfee' => '','enrollment' => 'S/ 330','monthlypayment' => '(10 pensiones) - S/ 330','created_at' => NULL,'updated_at' => NULL),
        array('id' => '47','idvenue' => '23','range' => 'Primaria','admissionfee' => 'S/ 400','enrollment' => 'S/ 400','monthlypayment' => '(10 pensiones) - S/ 400','created_at' => NULL,'updated_at' => NULL),
        array('id' => '48','idvenue' => '23','range' => 'Secundaria','admissionfee' => 'S/ 400','enrollment' => 'S/ 420','monthlypayment' => '(10 pensiones) - S/ 420','created_at' => NULL,'updated_at' => NULL),
        array('id' => '49','idvenue' => '24','range' => 'Primaria','admissionfee' => '','enrollment' => 'S/ 410','monthlypayment' => '(10 pensiones) - S/ 410','created_at' => NULL,'updated_at' => NULL),
        array('id' => '50','idvenue' => '24','range' => 'Secundaria','admissionfee' => '','enrollment' => 'S/ 410','monthlypayment' => '(10 pensiones) - S/ 410','created_at' => NULL,'updated_at' => NULL)
      );


      for ($i=0; $i < count($c); $i++) {
        DB::table('colegio_venue_investment')->insert([
          'idvenue'               => $c[$i]['idvenue'],
          'range'                 => $c[$i]['range'],
          'admissionfee'          => $c[$i]['admissionfee'],
          'enrollment'            => $c[$i]['enrollment'],
          'monthlypayment'        => $c[$i]['monthlypayment']
        ]);

      }
    }
}
