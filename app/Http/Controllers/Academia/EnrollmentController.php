<?php

namespace App\Http\Controllers\Academia;

define('FPDF_FONTPATH', str_replace('/public','/',getcwd()).'resources/internal/academia/pdf/fonts/');

//use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Academia\EnrollmentModel as Enrollment;
use App\Http\Requests\Academia\StoreEnrollment;
use App\Mail\Academia\EnrollmentMail;
use \setasign\Fpdi\Fpdi;
use \Carbon\Carbon;

class EnrollmentController extends Controller
{

  /**
   * Create new enrollment.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('/academia/enrollment')->with(['page' => 'enrollment']);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(StoreEnrollment $request)
   {
      $validatedData = $request->validated();

      $enrollment = new Enrollment;
      $enrollment->student_dni = $request->step1_dni;
      $enrollment->interest_university = $request->step1_university;

      /*
      $venue = explode('|', $request->step1_venue);
      $enrollment->interest_venue = $venue[0];
      */

      $enrollment->interest_venue = $request->step1_venue;
      $enrollment->interest_cycle = $request->step1_cycle;

      $enrollment->interest_university_key  = $request->step1_university_key;
      $enrollment->interest_cycle_key  = $request->step1_cycle_key;
      $enrollment->interest_venue_key  = $request->step1_venue_key;
      //$enrollment->interest_turn = $request->step1_turn;
      
      
      $enrollment->student_names = $request->step2_names;
      $enrollment->student_lastname = $request->step2_lastname;
      $enrollment->student_lastname_mother = $request->step2_lastname_mother;
      $enrollment->student_district = $request->step2_district;
      $enrollment->student_birth = Carbon::parse($request->step2_birth);
      $enrollment->student_gender = $request->step2_gender;

      $enrollment->student_address = $request->step2_address;
      $enrollment->student_phone_home = $request->step2_phonehome;
      $enrollment->student_phone_cell = $request->step2_mobile;
      $enrollment->student_email = $request->step2_email;
      $enrollment->student_year_finish_school = $request->step2_year_finish_school;
      $enrollment->student_school = $request->step2_school;
      $enrollment->student_postulate_university = $request->step2_universitypostulate;
      $enrollment->student_postulate_profession = $request->step2_profession;
      $enrollment->student_last_academy = $request->step2_oldacademy;
      $enrollment->attorney_type = $request->step3_apoderate;
      $enrollment->attorney_names = $request->step3_names;
      $enrollment->attorney_dni = $request->step3_dni;
      $enrollment->attorney_phone_home = $request->step3_phonehome;
      $enrollment->attorney_phone_cell = $request->step3_mobile;
      $enrollment->attorney_email = $request->step3_email;
      $enrollment->attorney_occupation = $request->step3_profession;
      $enrollment->attorney_work_location = $request->step3_work_location;
      $enrollment->attorney_work_phone = $request->step3_work_phone;
      $enrollment->attorney_phone_emergency = $request->step3_emergencyphone;
      $enrollment->save();

      // Send mail
      Mail::send(new EnrollmentMail($request));

      // Store in trilce system
      $this->storeAPI($request->step1_dni);

      /*return redirect()->route('academia-index')->with([
        'enrollment'  => true,
        'dni'         => encrypt($request->step1_dni)
      ]);*/

      return view('/academia/enrollment_success')->with([
       'nombre'       => $request->step2_names,
        'dni'         => encrypt($request->step1_dni)
      ]);
   }

  /**
   * Store in api academia wsdl.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   private function storeAPI($dni)
   {

      $enrollment = Enrollment::find($dni);

      $data = [];
      $data['request'] = [
          'ANIO_ACADEMICO'    => date("Y"),
          'BLDG_TBL'          => $enrollment->interest_venue,
          'CORREO_E'          => $enrollment->student_email,
          'NIVEL_ESTUDIO'     => $enrollment->interest_cycle,
          'NOMBRES'           => $enrollment->student_names,
          'NRO_DOCUMENTO'     => $enrollment->student_dni,
          'NRO_TELEFONO'      => $enrollment->student_phone_cell,
          'ORIGEN_INFO'       => 'FRWEB',
          'PRIMER_APELLIDO'   => $enrollment->student_lastname,
          'SEGUNDO_APELLIDO'  => $enrollment->student_lastname_mother,
          'SERVICIO'          => $enrollment->interest_university,
          'SEXO'              => ($enrollment->student_gender=='hombre'?'M':'F'),
          'TIPO_DOCUMENTO'    => '01',
          'TIPO_SERVICIO'     => 'ACADE'
        ];

      if(env('APP_ENV') == 'local')
      {
        $url = \Config::get('constants.API_ClientePublicoServicioLocal');
      }else{
        $url = \Config::get('constants.API_ClientePublicoServicioProduction');
      }

      $client = new \SoapClient($url, [
        'trace' => 1
      ]);

      try {
        $result = $client->FichaAtencion($data);

      }catch(SoapFault $e){

      }
   }

   /**
    * Download a generate pdf enrollment information.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function download(Request $request)
   {
      $internal_path = str_replace('/public','/',getcwd()).'resources/internal/academia/pdf/';
      $cost = json_decode('{
         "one" : {
           "ACACA" : {
             "san isidro" : {
               "cost" : "100",
               "time" : "30"
             },
             "los olivos" : {
               "cost" : "50",
               "time" : "15"
             },
             "torrico" : {
               "cost" : "50",
               "time" : "15"
             },
             "santa beatriz" : {
               "cost" : "50",
               "time" : "15"
             }             
           },
           "ACAUN" : {
             "all" : {
               "cost" : "50",
               "time" : "15"
             }
           },
           "ACASM" : {
             "all" : {
               "cost" : "50",
               "time" : "15"
             }
           }
         },
         "nine" : {
           "ACAUN" : {
             "ciencia" : "12",
             "letras" : "15"
           },
           "ACASM" : {
             "ciencia" : "12",
             "letras" : "15"
           },
           "ACACA" : {
             "ciencia" : "30",
             "letras" : "30"
           }
         }
       }');

      $dni = decrypt($request->token);
      $enrollment = Enrollment::find($dni);

      if(empty($enrollment->student_names)){
       return abort(404);
      }

      $terms_route = $cost->one->{$enrollment->interest_university};

      if(count((array)$terms_route) > 1){
       $terms_cost = $terms_route->{strtolower($enrollment->interest_venue_key)}->cost;
       $terms_time = $terms_route->{strtolower($enrollment->interest_venue_key)}->time;
      }else{
       $terms_cost = $terms_route->all->cost;
       $terms_time = $terms_route->all->time;
      }

      //$storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
      //$theme        = Storage::disk('local')->url('formato_matricula.pdf');
      $theme = $internal_path . 'formato_matricula.pdf';

      $pdf = new FPDI();
      $pdf->AddFont('33FA0F_9_0','','33FA0F_9_0.php');
      $pdf->AddPage('L','A4');
      $pdf->SetAutoPageBreak(false);

      $pdf->setSourceFile($internal_path.'formato_matricula.pdf');
      $pdf->useTemplate($pdf->importPage(1), 1, 3, 150);

      $pdf->setSourceFile($internal_path.'formato_matricula_terminos-y-condiciones.pdf');
      $pdf->useTemplate($pdf->importPage(1), 140, 3, 150);

      $pdf->SetFont('33FA0F_9_0');
      $pdf->SetFontSize(8.5);
      $pdf->SetTextColor(0, 0, 0);

      /*
      // Inicio
      $pdf->SetXY(112, 24);
      $pdf->Write(0, '01/01/2222');
      */

      // DNI
      $pdf->SetXY(16, 43);
      $pdf->Write(0, str_pad($enrollment->student_dni,8,"0",STR_PAD_LEFT));

      // Ciclo
      $pdf->SetXY(47, 43);
      $pdf->Write(0, utf8_decode($enrollment->interest_cycle_key));

      // Condición
      $pdf->SetXY(78, 43);
      $pdf->Write(0, 'P');

      // Sede
      $pdf->SetXY(16, 54);
      $pdf->Write(0, ucwords(utf8_decode($enrollment->interest_venue_key)));



      switch ($enrollment->interest_university) {

       case 'ACASM':
          $enrollment_interest_university_print = 'San marcos';
         break;

       case 'ACAUN':
          $enrollment_interest_university_print = 'UNI';
         break;

       case 'ACACA':
          $enrollment_interest_university_print = 'Católica';
         break;
      }

      // Universidad
      $pdf->SetXY(47, 54);
      $pdf->Write(0, strtoupper(utf8_decode($enrollment_interest_university_print)));

      // Nombres
      $pdf->SetXY(78, 73.5);
      $pdf->Write(0, ucwords(strtolower(utf8_decode($enrollment->student_names))));

      // Apellido Paterno y materno
      $pdf->SetXY(16, 73.5);
      $pdf->Write(0, ucwords(strtolower(utf8_decode($enrollment->student_lastname))) . ' ' . ucwords(strtolower(utf8_decode($enrollment->student_lastname_mother))) );

      // Telefono
      $pdf->SetXY(16, 96);
      $pdf->Write(0, utf8_decode($enrollment->student_phone_cell));

      // Direccion
      $pdf->SetXY(16, 85);
      $pdf->Write(0, utf8_decode($enrollment->student_address));

      // Email
      $pdf->SetXY(47, 96);
      $pdf->Write(0, utf8_decode($enrollment->student_email));

      // Finalizo Colegio
      $pdf->SetXY(16, 107);
      $pdf->Write(0, utf8_decode($enrollment->student_year_finish_school));

      // Colegio
      $pdf->SetXY(47, 107);
      $pdf->Write(0, utf8_decode($enrollment->student_school));





      // Universidad postula
      $pdf->SetXY(16, 118.5);
      $pdf->Write(0, ((utf8_decode($enrollment->student_postulate_university))));

      // Carrera postula
      $pdf->SetXY(56.5, 129);
      $pdf->Write(0, ucwords(strtolower(utf8_decode($enrollment->student_postulate_profession))));

      // Antigua academia
      $pdf->SetXY(16, 129.5);
      $pdf->Write(0, ucwords(utf8_decode($enrollment->student_last_academy)));

      // Apoderado: Apellidos y nombres
      $pdf->SetXY(16, 149);
      $pdf->Write(0, (empty($enrollment->attorney_names) ? '-' : ucwords(utf8_decode($enrollment->attorney_names)) ));

      // Apoderado: Ocupacion
      $pdf->SetXY(47, 160);
      $pdf->Write(0, (empty($enrollment->attorney_occupation) ? '-' : ucwords(utf8_decode($enrollment->attorney_occupation))) );

      // Apoderado: DNI
      $pdf->SetXY(16, 160);
      $pdf->Write(0, (empty($enrollment->attorney_dni) ? '-' : $enrollment->attorney_dni) );

      // Apoderado: Centro de trabajo
      $pdf->SetXY(16, 170.5);
      $pdf->Write(0, (empty($enrollment->attorney_work_location) ? '-' : utf8_decode($enrollment->attorney_work_location)) );

      // Apoderado: Telefono trabajo
      $pdf->SetXY(78, 171);
      $pdf->Write(0, (empty($enrollment->attorney_work_phone) ? '-' : $enrollment->attorney_work_phone ));

      // Apoderado: Telefono emergencia
      $pdf->SetXY(108, 171);
      $pdf->Write(0, (empty($enrollment->attorney_phone_emergency) ? '-' : utf8_decode($enrollment->attorney_phone_emergency)) );

      // Fecha: Día
      $pdf->SetXY(104.5, 180.5);
      $pdf->Write(0, date("d"));

      // Fecha: Mes
      $pdf->SetXY(113.5, 180.5);
      $pdf->Write(0, date("m"));

      // Fecha: Año
      $pdf->SetXY(132, 180.5);
      $pdf->Write(0, date("y"));

      // Apoderado Terms:
      $pdf->SetXY(200, 187.5);
      $pdf->Write(0, (empty($enrollment->attorney_names) ? '-' : utf8_decode($enrollment->attorney_names)) );

      // Apoderado Terms:
      $pdf->SetXY(200, 193.5);
      $pdf->Write(0, (empty($enrollment->attorney_dni) ? '-' : utf8_decode($enrollment->attorney_dni)) );


      // Terms 14:
      $pdf->SetXY(192.6, 160);
      $pdf->Write(0, '50');

      // Terms 10:
      $pdf->SetXY(225, 123.5);
      $pdf->Write(0, '5');

      // Terms 9:  <--- DINAMICOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
      $pdf->SetXY(200, 193.5);
      $pdf->Write(0, '');

      // Terms 5:
      $pdf->SetXY(223.2, 67);
      $pdf->Write(0, '50');

      // Terms 3.1:
      $pdf->SetXY(192.3, 44.3);
      $pdf->Write(0, '50');

      // Terms 3.2:
      $pdf->SetXY(237.5, 44.3);
      $pdf->Write(0, '30');

      // Terms 2:
      $pdf->SetXY(261.8, 33); // HERE!
      $pdf->Write(0, $terms_cost);

      // Terms 2.1:
      $pdf->SetXY(253, 36.0);
      $pdf->Write(0, $terms_time);

      if($enrollment->interest_university == 'pucp'){
      $pdf->SetXY(240.5, 109.2);
      $pdf->Write(0, "30");

      $pdf->SetFontSize(6.5);

      $pdf->SetXY(162.1, 115.2);
      $pdf->Write(0, utf8_decode("- La pérdida del libro de Letras que otorga la institución dará lugar al cobro de S/ 30 por concepto de duplicado."));
      }else{
      $pdf->SetXY(240.5, 109.2);
      $pdf->Write(0, "12");

      $pdf->SetFontSize(6.5);

      $pdf->SetXY(162.1, 115.2);
      $pdf->Write(0, utf8_decode("- La pérdida del libro de Letras que otorga la institución dará lugar al cobro de S/ 15 por concepto de duplicado."));
      }

      $pdf->SetFontSize(8.5);

      $pdf->SetTitle("Ficha de inscripción", true);
      $pdf->SetAuthor("Trilce");

      $pdf->Output('i');
   }   

}
