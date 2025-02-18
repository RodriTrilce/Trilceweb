<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Meta;

class AdmissionController extends Controller
{
  public function index($modality)
  {
    switch ($modality) {
      case 'nuevo':
          $var = [
            'title' => 'Nuevo',
            'type'  => $modality
          ];
        break;
      
      case 'traslado':
          $var = [
            'title' => 'Traslado',
            'type'  => $modality
          ];
        break;

      case 'regular':
          $var = [
            'title' => 'Regular',
            'type'  => $modality
          ];
        break;
      
      default:
          abort(404);
        break;
    }
    Meta::set('description', 'Revisa los pasos y requisitos para el proceso de matrícula 2024.');
    return view('/colegio/admission')->with($var);
  }
}
