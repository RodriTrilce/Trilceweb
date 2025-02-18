<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BannersModel as Banner;
use Meta;
use Route;
use App\Models\Popup;

class IndexController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $banners = Banner::where([
      ['type',  '=', 'index_academia'],
      ['state', '=', '1']
    ])
    ->orderBy('position', 'asc')
    ->get();

    $popup = Popup::where([
      ['type', '=', Route::currentRouteName()]
  ])->first();
  
  $popup = ($popup && $popup->state == '0') ? null : $popup;
  

    Meta::set('title', 'Academia Trilce | Preparación preuniversitaria');
    Meta::set('description', 'Somos una academia preuniversitaria especializada en la preparación para los exámenes de admisión de las universidades San Marcos (UNMSM), la UNI y la Católica (PUCP).');
    /* Meta::set('description', 'Academia Trilce con más de 38 años de experiencia potenciando el nivel académico y desarrollo personal de nuestros alumnos.'); */

    return view('/academia/index')
    ->with([
      'print'   => (parse_url(request()->headers->get('referer'), PHP_URL_PATH) == '/' ? true : false),
      'banners' => $banners,
      'popup'   => $popup
    ]);

  }
}
