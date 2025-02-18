<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\Academia\PreparationApiResource;

class PreparationNewController extends Controller
{
  public function __construct()
  {
   /*  if (env('APP_ENV') == 'local') {
      $url = \Config::get('constants.API_ClientePublicoServicioLocal');
    } else {
      $url = \Config::get('constants.API_ClientePublicoServicioProduction');
    }

    $this->client = new \SoapClient($url, [
      'trace' => 1
    ]); */
  } 

  public function index($university)
  {
    switch ($university) {
      case 'san-marcos':
        $var = [
          'title' => 'San Marcos',
          'type'  => $university,
          'data' => $this->BeginnigUNI('ACASM')
        ];
        break;

      case 'uni':
        $var = [
          'title' => 'UNI',
          'type'  => $university,
          'data' => $this->BeginnigUNI('ACAUN')
        ];
        break;

      case 'pucp':
        $var = [
          'title' => 'PUCP',
          'type'  => $university,
          'data' => $this->BeginnigUNI('ACACA')
        ];
        break;

      default:
        abort(404);
        break;
    }
    return view('/academia/preparation2')->with($var);


    /*return view('/academia/partials/preparation/uni')->with([
          'variable' => 'Abcdefg'
      ]);*/
  }

  /* TODAS LAS LINEAS QUE ESTAN COMENTADAS CON "/*" PERTENECEN AL FIX 10 EN EL CUAL SE COMENTO TODA ESTA FUNCION*/

  public function BeginnigUNI($university)
  {
/*     try {
      $result = $this->client->ServicioAtencion();
      $data = new PreparationApiResource(collect($result->ServicioAtencionResult));
    } catch (SoapFault $e) {
      dd($e->getMessage());
    } */

    //return $data;

    //return json_decode($data, 1);
    //return $data->toJson();
    /* $array = json_decode($data->toJson(), 1); */
    //return $array = json_decode($data->toJson(), 1);


    //dd(count($array['ServiciosAtencionResponse']));
    /* $arrays = $array['ServiciosAtencionResponse']; */
    //dd($arrays);


    /* foreach ($arrays as $fila) { */
      //if($fila['SERVICIO']==$university && $fila['ESTADO_SESSION']=='ACT'){
    /*   if ($fila['SERVICIO'] == $university) {
        $my[] = $fila;
      }
    }
    return $this->groupArray($my, 'NIVEL_ESTUDIO_DESCRIPCION'); */
    //dd($this->groupArray($my,'NIVEL_ESTUDIO_DESCRIPCION'));       
  }

  function groupArray($array, $groupkey)
  {
    if (count($array) > 0) {
      $keys = array_keys($array[0]);
      $removekey = array_search($groupkey, $keys);

      if ($removekey === false)
        return array("Clave \"$groupkey\" no existe");
      else
        unset($keys[$removekey]);

      $groupcriteria = array();
      $return = array();

      foreach ($array as $value) {
        $item = null;
        foreach ($keys as $key) {
          $item[$key] = $value[$key];
        }

        $busca = array_search($value[$groupkey], $groupcriteria);
        if ($busca === false) {
          $groupcriteria[] = $value[$groupkey];
          $return[] = array($groupkey => $value[$groupkey]);
          $busca = count($return) - 1;
        }
        $return[$busca][] = $item;
      }
      return $return;
      //dd($return);
    } else
      return array();
  }
}
