<?php
namespace App\Http\Controllers\Academia;

//define("_MPDF_TEMP_PATH", '/var/www/trilce.edu.pe/web/storage/framework/pdf/');

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Mpdf\Mpdf;

use App\Http\Controllers\Controller;
use App\Http\Resources\Academia\Apis\OlympicsApiResource;

class MathOlympicsRegisterController extends Controller
{

    public function __construct(){
		if(env('APP_ENV') == 'local')
		{
			$url = \Config::get('constants.API_ClientePublicoServicioLocal');
		}else{
			$url = \Config::get('constants.API_ClientePublicoServicioProduction');
		}

		$this->client = new \SoapClient($url, [
			'trace' => 1
		]);
		}
		
		//Agregar Manualmente los codidos de los simulacros no activos
		public function blacklist($codurl)
		{
			$notactive = array();
			$longitud = count($notactive);
			for($i=0; $i<$longitud; $i++)
				{
					if($codurl == $notactive[$i]){
						return true;
				}
		}
	}    
   
    public function index(Request $request){
        //$university = University::validate( ucwords(Str::slug($request->university, ' ')) );

		//if(!$university)
		//return abort(404);
			if(!$this->blacklist($request->codurl)){
				try {
					$result = $this->client->OI_Dato([
						'CODE_URL'  => $request->codurl
					]);
			
					$collection = collect($result->OI_DatoResult);

					//$result = $this->client->OlimpiadasInscripcion($data);
			
					} catch ( SoapFault $e ) {
					dd($e->getMessage());
					}

				return view('/academia/math_olympics_register')->with([
					'codurl' => $request->codurl,
					'descripcion' => $collection['DESCRIPCION'],
					'distrito' => $collection['DISTRITO'],
					'inicio' =>  $collection['FECHA_INICIO'],
					'fin' => $collection['FECHA_FIN'],
					'lugar' => $collection['INSTITUCION_EDUCATIVA'],

				]);
			}else{
				return abort(404);
			}

	}

    public function store(Request $request){
        $data = [];
		$data['request'] = [
            'CODE_URL' 			    => $request->CODE_URL,
            'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO,
            'NOMBRES'	            => $request->NOMBRES,
			'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO,
            'SEGUNDO_APELLIDO' 	    => $request->SEGUNDO_APELLIDO,
            'CORREO_E'	            => $request->CORREO_E,
            'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
            'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
            'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
			'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO			
		];
		try {
				
			$result = $this->client->OlimpiadasInscripcion($data);
			$collection = collect($result->OlimpiadasInscripcionResult);

		} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}

		if($collection['EST_PROCESO']== 1)
		{
			return view('/academia/math_olympics_exito')->with([
				'CODE_URL' 			    => $request->CODE_URL,
				'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO,
				'NOMBRES'	            => $request->NOMBRES,
				'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO,
				'SEGUNDO_APELLIDO' 	    => $request->SEGUNDO_APELLIDO,
				'CORREO_E'	            => $request->CORREO_E,
				'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
				'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
				'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
				'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO	
			 ]);
		}else{
			 print_r($collection['MENSAJE']);
			 return redirect()->route('academia-matholympics');
		}
	}
	
	public function indexGroup(Request $request){
        //$university = University::validate( ucwords(Str::slug($request->university, ' ')) );

		//if(!$university)
		//return abort(404);
		try {
			$result = $this->client->OI_Dato([
			  'CODE_URL'  => $request->codurl
			]);
  
			$collection = collect($result->OI_DatoResult);

			//$result = $this->client->OlimpiadasInscripcion($data);
  
		  } catch ( SoapFault $e ) {
			dd($e->getMessage());
		  }
		
		  

		return view('/academia/math_olympics_group_register')->with([
			'codurl' => $request->codurl,
			'descripcion' => $collection['DESCRIPCION'],
			'distrito' => $collection['DISTRITO'],
			'inicio' =>  $collection['FECHA_INICIO'],
			'fin' => $collection['FECHA_FIN'],
			'lugar' => $collection['INSTITUCION_EDUCATIVA'],
		]);
	}
	
	public function storeGroup(Request $request){
		try {
				$longitud = count($request->NRO_DOCUMENTO);
				for($i=0;$i<$longitud;$i++)
 				{

					$data = [];
					$data['request'] = [
						'CODE_URL' 			    => $request->CODE_URL,
						'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO[$i],
						'NOMBRES'	            => $request->NOMBRES[$i],
						'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO[$i],
						'SEGUNDO_APELLIDO' 	    => $request->SEGUNDO_APELLIDO[$i],
						//'CORREO_E'	            => $request->CORREO_E,
						'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
						'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
						'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
						'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO			
					];

					$result = $this->client->OlimpiadasInscripcion($data);
				}

				$collection = collect($result->OlimpiadasInscripcionResult);

		} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}

		//return view('/academia/math_olympics_exito_group');

		if($collection['EST_PROCESO']== 1)
		{
			return view('/academia/math_olympics_exito_group')->with([
				'CODE_URL' 			    => $request->CODE_URL,
				'NOMBRES' 	    		=> $request->NOMBRES,
				'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO,
				'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO,
				'SEGUNDO_APELLIDO'	    => $request->SEGUNDO_APELLIDO,
				'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
				'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
				'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
				'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO
			 ]);

		}else{
			 print_r($collection['MENSAJE']);
			 return redirect()->route('academia-matholympics');
		}
	}
	
	public function imprimirPDF(Request $request){
		try {
			$result = $this->client->OI_Dato([
				'CODE_URL'  => $request->CODE_URL
			]);
	
			$collection = collect($result->OI_DatoResult);

			//$result = $this->client->OlimpiadasInscripcion($data);
	
			} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}

		//dd($data = $request->all());
		$data = [
			'descripcion' 			=> $collection['DESCRIPCION'],
			'distrito' 				=> $collection['DISTRITO'],
			'inicio' 				=>  $collection['FECHA_INICIO'],
			'fin' 					=> $collection['FECHA_FIN'],
			'fecha_olimpiada'		=> $collection['FECHA_OLIMPIADA'],
			'lugar' 				=> $collection['INSTITUCION_EDUCATIVA'],

			'CODE_URL' 			    => $request->CODE_URL,
			'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO,
			'NOMBRES'	            => $request->NOMBRES,
			'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO,
			'SEGUNDO_APELLIDO' 	    => $request->SEGUNDO_APELLIDO,
		
			'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
			'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
			'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
			'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO
		];
		
		 //return view('/academia/math_olympics_pdf',$data);
		 $mpdf = new Mpdf([
			//'tempDir' => '/var/www/trilce.edu.pe/web/custom/temp/dir/path',
			 'tempDir' => str_replace('/public','/',getcwd()).'storage/framework/pdf',
			 'margin_top' => 10,
			 'margin_left' => 10,
			 'margin_right' => 10,
			 'mirrorMargins' => true,
			 'default_font' => 'arial',
			 "format" => "A4",
			 
 
		 ]);

		 $html = view('/academia/math_olympics_pdf',$data)->render();
		 $mpdf->SetDisplayMode('fullpage');
		 
		 $mpdf->WriteHTML($html);
		 $namefile = 'Certificado-Olimpiadas-Trilce'.time().'.pdf';
		 $mpdf->SetJS('this.print();');
         $mpdf->Output($namefile,"I");
	}

	public function descargarPDF(Request $request){
		try {
			$result = $this->client->OI_Dato([
				'CODE_URL'  => $request->CODE_URL
			]);
	
			$collection = collect($result->OI_DatoResult);

			//$result = $this->client->OlimpiadasInscripcion($data);
	
			} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}

		//dd($data = $request->all());
		$data = [
			'descripcion' 			=> $collection['DESCRIPCION'],
			'distrito' 				=> $collection['DISTRITO'],
			'inicio' 				=>  $collection['FECHA_INICIO'],
			'fin' 					=> $collection['FECHA_FIN'],
			'fecha_olimpiada'		=> $collection['FECHA_OLIMPIADA'],
			'lugar' 				=> $collection['INSTITUCION_EDUCATIVA'],

			'CODE_URL' 			    => $request->CODE_URL,
			'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO,
			'NOMBRES'	            => $request->NOMBRES,
			'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO,
			'SEGUNDO_APELLIDO' 	    => $request->SEGUNDO_APELLIDO,
			'CORREO_E'	            => $request->CORREO_E,
			'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
			'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
			'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
			'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO	
		];
		
		 //return view('/academia/math_olympics_pdf',$data);
		 $mpdf = new Mpdf([
			 //'tempDir' => '/var/www/trilce.edu.pe/web/storage/framework/pdf',
			 'tempDir' => str_replace('/public','/',getcwd()).'storage/framework/pdf',
			 'margin_top' => 10,
			 'margin_left' => 10,
			 'margin_right' => 10,
			 'mirrorMargins' => true,
			 'default_font' => 'arial',
			 "format" => "A4",
			 
 
		 ]);

		 $html = view('/academia/math_olympics_pdf',$data)->render();
		 $mpdf->SetDisplayMode('fullpage');
		 $mpdf->WriteHTML($html);
		 $namefile = 'Certificado-Olimpiadas-Trilce'.time().'.pdf';
		 $mpdf->Output($namefile,"D");
	}

	public function imprimirPDFGROUP(Request $request){
		//dd($request->all());
		try {
			$result = $this->client->OI_Dato([
				'CODE_URL'  => $request->CODE_URL
			]);
	
			$collection = collect($result->OI_DatoResult);

			//$result = $this->client->OlimpiadasInscripcion($data);
	
			} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}

		//dd($data = $request->all());
		$data = [
			'descripcion' 			=> $collection['DESCRIPCION'],
			'distrito' 				=> $collection['DISTRITO'],
			'inicio' 				=>  $collection['FECHA_INICIO'],
			'fin' 					=> $collection['FECHA_FIN'],
			'fecha_olimpiada'		=> $collection['FECHA_OLIMPIADA'],
			'lugar' 				=> $collection['INSTITUCION_EDUCATIVA'],

			'CODE_URL' 			    => $request->CODE_URL,
			'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO,
			'NOMBRES'	            => $request->NOMBRES,
			'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO,
			'SEGUNDO_APELLIDO' 	    => $request->SEGUNDO_APELLIDO,
		
			'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
			'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
			'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
			'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO
		];
		
		 //return view('/academia/math_olympics_pdf_group',$data);
		 
		 $mpdf = new Mpdf([
			 //'tempDir' => '/var/www/trilce.edu.pe/web/storage/framework/pdf',	
			 'tempDir' => str_replace('/public','/',getcwd()).'storage/framework/pdf',		  
			 'margin_top' => 10,
			 'margin_left' => 10,
			 'margin_right' => 10,
			 'mirrorMargins' => true,
			 'default_font' => 'arial',
			 "format" => "A4",
			 
 
		 ]);

		 $html = view('/academia/math_olympics_pdf_group',$data)->render();
		 $mpdf->SetDisplayMode('fullpage');
		 
		 $mpdf->WriteHTML($html);
		 $namefile = 'Certificado-Grupal-Olimpiadas-Trilce'.time().'.pdf';
		 $mpdf->SetJS('this.print();');
         $mpdf->Output($namefile,"I");
	}

	public function descargarPDFGROUP(Request $request){
		//dd($data = $request->all());

		try {
			$result = $this->client->OI_Dato([
				'CODE_URL'  => $request->CODE_URL
			]);
	
			$collection = collect($result->OI_DatoResult);

			//$result = $this->client->OlimpiadasInscripcion($data);
	
			} catch ( SoapFault $e ) {
			dd($e->getMessage());
		}

		$data = [
			'descripcion' 			=> $collection['DESCRIPCION'],
			'distrito' 				=> $collection['DISTRITO'],
			'inicio' 				=>  $collection['FECHA_INICIO'],
			'fin' 					=> $collection['FECHA_FIN'],
			'fecha_olimpiada'		=> $collection['FECHA_OLIMPIADA'],
			'lugar' 				=> $collection['INSTITUCION_EDUCATIVA'],

			'CODE_URL' 			    => $request->CODE_URL,
			'NRO_DOCUMENTO' 	    => $request->NRO_DOCUMENTO,
			'NOMBRES'	            => $request->NOMBRES,
			'PRIMER_APELLIDO'	    => $request->PRIMER_APELLIDO,
			'SEGUNDO_APELLIDO' 	    => $request->SEGUNDO_APELLIDO,
		
			'DEPTO_UBIG' 	        => $request->DEPTO_UBIG,
			'TIPO_INSTITUCION' 	    => $request->TIPO_INSTITUCION,
			'COLEGIO_PROCEDENCIA'   => $request->COLEGIO_PROCEDENCIA,
			'NIVEL_ESTUDIO' 	    => $request->NIVEL_ESTUDIO
		];
		
		 //return view('/academia/math_olympics_pdf_group',$data);
		 
		 $mpdf = new Mpdf([
			 //'tempDir' => '/var/www/trilce.edu.pe/web/storage/framework/pdf',	
			 'tempDir' => str_replace('/public','/',getcwd()).'storage/framework/pdf',
			 'autoPageBreak' => true,	  
			 'margin_top' => 10,
			 'margin_left' => 10,
			 'margin_right' => 10,
			 'mirrorMargins' => true,
			 'default_font' => 'arial',
			 "format" => "A4",
			 
 
		 ]);
			
		 $html = view('/academia/math_olympics_pdf_group_unique',$data)->render();
		 $mpdf->SetDisplayMode('fullpage');

		 $mpdf->autoPageBreak = true;

		 $mpdf->AddPage();
		 
		 $mpdf->WriteHTML($html);
		 $namefile = 'Certificado-Olimpiadas-Trilce'.time().'.pdf';
		 $mpdf->Output($namefile,"D");
	}
	 
}