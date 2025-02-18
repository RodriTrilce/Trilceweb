<?php

use Illuminate\Database\Seeder;

class ColegioVenueAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      $c = array(
        array('id' => '1','idvenue' => '1','grades' => 'Primaria - Secundaria','address' => 'Jr. El Rosario 530 Urb. Canto Grande','phone' => '458-7974','logitude' => '-11.97225886064941','latitude' => '-76.99505145790988','created_at' => NULL,'updated_at' => NULL),
        array('id' => '2','idvenue' => '2','grades' => 'Primaria','address' => '
      Av. Cuba 414-438','phone' => '619-8118','logitude' => '-12.074882','latitude' => '-77.039687','created_at' => NULL,'updated_at' => NULL),
        array('id' => '3','idvenue' => '2','grades' => 'Secundaria 1.<sup>o</sup> a 3.<sup>o</sup>','address' => 'Calle Almte. Guisse 964','phone' => '619-8118','logitude' => '-12.074607','latitude' => '-77.039725','created_at' => NULL,'updated_at' => NULL),
        array('id' => '4','idvenue' => '2','grades' => 'Secundaria 4.<sup>o</sup> a 5.<sup>o</sup>','address' => 'Av. Arequipa 1381','phone' => '727-1590','logitude' => '-12.078227','latitude' => '-77.035225','created_at' => NULL,'updated_at' => NULL),
        array('id' => '5','idvenue' => '3','grades' => 'Primaria y Secundaria','address' => 'Av. 13 de enero N<sup>o</sup> 1524, 1526 y 1528','phone' => '458-7974 / 458-6462','logitude' => '-12.003895','latitude' => '-76.998862','created_at' => NULL,'updated_at' => NULL),
        array('id' => '6','idvenue' => '4','grades' => 'Primaria y Secundaria','address' => 'Jr. José María Eguren Mz. E Lt. 12 Coop. de Vivienda "Viña San Francisco"','phone' => '354-2207','logitude' => '-12.03253807008272','latitude' => '-76.95160503628665','created_at' => NULL,'updated_at' => NULL),
        array('id' => '7','idvenue' => '5','grades' => 'Inicial','address' => 'Calle Ajenjos 192','phone' => '341-0225','logitude' => '-12.078033','latitude' => '-76.980168','created_at' => NULL,'updated_at' => NULL),
        array('id' => '8','idvenue' => '5','grades' => 'Primaria','address' => 'Jr. Las tunas 272','phone' => '250-0299','logitude' => '-12.078728','latitude' => '-76.981883','created_at' => NULL,'updated_at' => NULL),
        array('id' => '9','idvenue' => '5','grades' => 'Secundaria','address' => 'Av. Paracas 692','phone' => '434-3337','logitude' => '-12.078788','latitude' => '-76.982088','created_at' => NULL,'updated_at' => NULL),
        array('id' => '10','idvenue' => '6','grades' => 'Primaria','address' => 'Av. Javier Prado Este 5431','phone' => '434-4243','logitude' => '-12.073943','latitude' => '-76.962126','created_at' => NULL,'updated_at' => NULL),
        array('id' => '11','idvenue' => '6','grades' => 'Secundaria','address' => 'Av. Javier Prado Este 5850','phone' => '435-3254','logitude' => '-12.072324','latitude' => '-76.958245','created_at' => NULL,'updated_at' => NULL),
        array('id' => '12','idvenue' => '7','grades' => 'Inicial, Primaria y Secundaria','address' => 'Av. Separadora Agroindustrial Subparcela 34 A-2','phone' => '619-8105','logitude' => '-12.221274088979186','latitude' => '-76.95288176777774','created_at' => NULL,'updated_at' => NULL),
        array('id' => '13','idvenue' => '8','grades' => 'Primaria','address' => 'Av. El Triunfo 455','phone' => '496-1352','logitude' => '-12.164980','latitude' => '-76.946994','created_at' => NULL,'updated_at' => NULL),
        array('id' => '14','idvenue' => '8','grades' => 'Secundaria','address' => 'Av. Pachacútec 2221','phone' => '496-0273','logitude' => '-12.166791','latitude' => '-76.951410','created_at' => NULL,'updated_at' => NULL),
        array('id' => '15','idvenue' => '9','grades' => 'Secundaria','address' => 'Av. Arequipa 3505','phone' => '421-8436 - 422-4601','logitude' => '-12.100834548881421','latitude' => '-77.03191353078773','created_at' => NULL,'updated_at' => NULL),
        array('id' => '16','idvenue' => '10','grades' => 'Primaria','address' => 'Av. Caminos del Inca 3272','phone' => '274-0901','logitude' => '-12.144110','latitude' => '-76.985386','created_at' => NULL,'updated_at' => NULL),
        array('id' => '17','idvenue' => '10','grades' => 'Secundaria','address' => 'Av. Morro Solar s/n cruce con Calle Uno','phone' => '274-5947 / 274-5949','logitude' => '-12.147487','latitude' => '-76.983047','created_at' => NULL,'updated_at' => NULL),
        array('id' => '18','idvenue' => '11','grades' => 'Secundaria','address' => 'Jr. Emilio Fernández 641','phone' => '619-8103','logitude' => '-12.072639','latitude' => '-77.03227','created_at' => NULL,'updated_at' => NULL),
        array('id' => '19','idvenue' => '12','grades' => 'Secundaria','address' => 'Panamericana Norte, Km. 23.50, Mz "H", Lote 36 - Urb. Prolima III Etapa','phone' => '619-8101','logitude' => '-11.927255','latitude' => '-77.073405','created_at' => NULL,'updated_at' => NULL),
        array('id' => '20','idvenue' => '13','grades' => 'Secundaria','address' => 'Calle Martín de Murúa 120','phone' => '619-8107','logitude' => '-12.076832478734364','latitude' => '-77.09093018150054','created_at' => NULL,'updated_at' => NULL),
        array('id' => '21','idvenue' => '14','grades' => 'Primaria y Secundaria','address' => 'Av. Tomás Valle 845','phone' => '619-8108','logitude' => '-12.010900','latitude' => '-77.068304','created_at' => NULL,'updated_at' => NULL),
        array('id' => '22','idvenue' => '15','grades' => 'Primaria','address' => 'Av. Universitaria 5926','phone' => '619-8110','logitude' => '-11.953472','latitude' => '-77.059835','created_at' => NULL,'updated_at' => NULL),
        array('id' => '23','idvenue' => '15','grades' => 'Secundaria','address' => 'Jr. Asunción 825, Urb. El Parral','phone' => '619-8102','logitude' => '-11.953324','latitude' => '-77.053869','created_at' => NULL,'updated_at' => NULL),
        array('id' => '24','idvenue' => '16','grades' => 'Primaria y Secundaria','address' => 'Av. Alameda Horizontes Mz I-1 Lte. 1 - Urb. Huertos de Villa','phone' => '619-8104','logitude' => '-12.204722726703183','latitude' => '-77.00857524476612','created_at' => NULL,'updated_at' => NULL),
        array('id' => '25','idvenue' => '17','grades' => 'Secundaria','address' => 'Av. Saenz Peña N° 1115 - Callao','phone' => '619-8117','logitude' => '-12.059370218764478','latitude' => '-77.13290806451948','created_at' => NULL,'updated_at' => NULL),
        array('id' => '26','idvenue' => '18','grades' => 'Secundaria','address' => 'Jr. Zorritos 159','phone' => '
      330-5834','logitude' => '-12.050830950662833','latitude' => '-77.04337595020888','created_at' => NULL,'updated_at' => NULL),
        array('id' => '27','idvenue' => '19','grades' => 'Primaria y Secundaria','address' => 'Av. Manuel Vera Enriquez 715 Urb. Primavera','phone' => '
      Primaria: (044) 296-481 / Secundaria: (044) 299-832','logitude' => '-8.101201','latitude' => '-79.035178','created_at' => NULL,'updated_at' => NULL),
        array('id' => '28','idvenue' => '19','grades' => 'Primaria y Secundaria','address' => 'Calle Julián Cruzado 102 Urb. Santa María - V Etapa','phone' => '(044) 203-532','logitude' => '-8.1289332','latitude' => '-79.0227763','created_at' => NULL,'updated_at' => NULL),
        array('id' => '29','idvenue' => '20','grades' => 'Primaria y Secundaria','address' => 'Calle 13 Mz. "A" Lote 12 Urb. Miraflores II Etapa Castilla','phone' => '(073) 344-052','logitude' => '-5.187181','latitude' => '-80.6199949','created_at' => NULL,'updated_at' => NULL),
        array('id' => '30','idvenue' => '21','grades' => 'Secundaria','address' => 'Alejandro O\'Deustua 1350, El Tambo','phone' => '(064) 419-690','logitude' => '-12.065764','latitude' => '-75.221565','created_at' => NULL,'updated_at' => NULL),
        array('id' => '31','idvenue' => '22','grades' => 'Primaria y Secundaria','address' => 'Calle Tarma N° 180','phone' => '(064) 400-948','logitude' => '-11.056924','latitude' => '-75.329415','created_at' => NULL,'updated_at' => NULL),
        array('id' => '32','idvenue' => '23','grades' => 'Primaria y Secundaria','address' => 'Av. Grau 1000 - Urb. Santa Victoria','phone' => '(074) 205-124','logitude' => '-6.783283','latitude' => '-79.845994','created_at' => NULL,'updated_at' => NULL),
        array('id' => '33','idvenue' => '24','grades' => 'Primaria','address' => 'Av. Zamácola 440','phone' => '(054) 384-507','logitude' => '-16.393397','latitude' => '-71.548473','created_at' => NULL,'updated_at' => NULL),
        array('id' => '34','idvenue' => '24','grades' => 'Secundaria','address' => 'Av. Urb. Magisterial 2da etapa G-16','phone' => '(054) 250-548','logitude' => '-16.399580','latitude' => '-71.546691','created_at' => NULL,'updated_at' => NULL)
      );
      
      for ($i=0; $i < count($c) ; $i++) {

        DB::table('colegio_venue_address')->insert([
          'idvenue' => $c[$i]['idvenue'],
          'grades' => $c[$i]['grades'],
          'address' => $c[$i]['address'],
          'phone' => $c[$i]['phone'],
          'logitude' => $c[$i]['logitude'],
          'latitude' => $c[$i]['latitude'],
        ]);
      }
      
      
    }
}
