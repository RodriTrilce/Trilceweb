<?php

namespace App\Http\Controllers\Academia\Apis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Academia\Apis\OlympicsApiResource; 

class OlympicsApiController extends Controller
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

    public function type(Request $request)
    {
        try {
          $result = $this->client->OI_NivelEstudio([
            'CODE_URL'  => $request->CODE_URL
          ]);

          $collection = collect($result->OI_NivelEstudioResult);

        } catch ( SoapFault $e ) {
          dd($e->getMessage());
        }

    	return new OlympicsApiResource($collection);
    }   
    
    public function info(Request $request)
    {
        try {
          $result = $this->client->OI_Dato([
            'CODE_URL'  => $request->CODE_URL
          ]);

          $collection = collect($result->OI_DatoResult);

        } catch ( SoapFault $e ) {
          dd($e->getMessage());
        }

    	return new OlympicsApiResource($collection);
    }
}