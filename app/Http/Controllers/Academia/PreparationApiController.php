<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Academia\PreparationApiResource;

class PreparationApiController extends Controller
{
    public function __construct()
    {
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

     public function cycle(Request $request)
     {
      
      try{
          $result = $this->client->FA_Bldg([
            'ANIO_ACADEMICO'  => date("Y"),
            'TIPO_SERVICIO'   => 'ACADE',
            'SERVICIO'        => $request->university,
            'NIVEL_ESTUDIO'   => $request->cycle
          ]);

          $collection = collect($result->FA_BldgResult);
          $return     = new EnrollmentResource($collection);
          
          //Cache::put($university, $return, 20160);

          //return $return;
          return new PreparationApiResource(collect($return));

      }catch (SoapFault $e){
        die;
      }

     }    
}
