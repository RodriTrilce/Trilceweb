<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PreparationController extends Controller
{

    public function index($university)
    {
      switch ($university) {
        case 'san-marcos':
            $var = [
              'title' => 'San Marcos',
              'type'  => $university
            ];
          break;

        case 'uni':
            $var = [
              'title' => 'UNI',
              'type'  => $university
            ];
          break;

        case 'pucp':
            $var = [
              'title' => 'PUCP',
              'type'  => $university
            ];
          break;

        default:
            abort(404);
          break;
      }
      return view('/academia/preparation')->with($var);
    }
}
