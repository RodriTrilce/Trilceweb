<?php

namespace App\Http\Controllers\Academia\Apis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Academia\Apis\SimulacrumApiResource; 

class SimulacrumApiController extends Controller
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
        'trace' => 1,
        'keep_alive' => true,
        'connection_timeout' => 5000,
        'cache_wsdl' => WSDL_CACHE_NONE,
        'compression'   => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
      ]);
    }

    public function data(Request $request)
    {
        try {
          $result = $this->client->SI_Dato([
            'CODE_URL'  => $request->CODE_URL
          ]);

          $collection = collect($result->SI_DatoResult);

        } catch ( SoapFault $e ) {
          dd($e->getMessage());
        }

      //return new SimulacrumApiResource($collection);
      //return view("/academia/simulacrum_exam", compact('collection'));
      //return view('/academia/simulacros-uni/inscripcion/aedd8971b7')->with([
        //'post'      => $post,
        //'related'   => $related
      //]);
    }

    public function venue(Request $request)
    {
        try {
          $result = $this->client->SI_LOCAL([
            'CODE_URL'  => $request->CODE_URL
          ]);

          $collection = collect($result->SI_LocalResult);

        } catch ( SoapFault $e ) {
          dd($e->getMessage());
        }

    	return new SimulacrumApiResource($collection);
    }

    public function type(Request $request)
    {
        try {
          $result = $this->client->SI_Nivel([
            'CODE_URL'  => $request->CODE_URL,
            'BLDG_TBL'  => $request->BLDG_TBL,
          ]);

          $collection = collect($result->SI_NivelResult);

        } catch ( SoapFault $e ) {
          dd($e->getMessage());
        }

    	return new SimulacrumApiResource($collection);
    }

    public function area(Request $request)
    {
        try {
          $result = $this->client->SI_Area([
            'SERVICIO'  => $request->SERVICIO   
          ]);

          $collection = collect($result->SI_AreaResult);

        } catch ( SoapFault $e ) {
          dd($e->getMessage());
        }

    	return new SimulacrumApiResource($collection);
    }

    public function carrera(Request $request)
    {
        try {
          $result = $this->client->SI_Carrera([
            'SERVICIO'  => $request->SERVICIO,  
            'CODIGO_AREA'  => $request->CODIGO_AREA
          ]);

          $collection = collect($result->SI_CarreraResult);

        } catch ( SoapFault $e ) {
          dd($e->getMessage());
        }

    	return new SimulacrumApiResource($collection);
    }

    /*Nivel de Estudios No es Necesario*/
    /*public function type(Request $request)
    {
        try {
          $result = $this->client->SI_Nivel([
            'CODE_URL'  => $request->CODE_URL,
            'BLDG_TBL'  => $request->BLDG_TBL
          ]);

          $collection = collect($result->SI_NivelResul);

        } catch ( SoapFault $e ) {
          dd($e->getMessage());
        }

    	return new SimulacrumApiResource($collection);
    }*/

    
}