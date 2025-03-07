<?php

namespace App\Http\Controllers\Colegio;

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
      ['type',  '=', 'index_colegio'],
      ['state', '=', '1']
    ])
    ->orderBy('position', 'asc')
    ->get();

    $popup = Popup::where([
      ['type', '=', 'colegio-index'],
      ['state', '=', '1']
  ])->first();
  
  
  $popup = ($popup && $popup->state == '1') ? $popup : null;


    Meta::set('title', 'Colegio Trilce | Con 18 sedes en Lima y 6 en provincia');
    Meta::set('description', 'Con 18 sedes en Lima y 6 en provincia');

    return view('/colegio/index')
    ->with([
      'print'   => (parse_url(request()->headers->get('referer'), PHP_URL_PATH) == '/' ? true : false),
      'banners' => $banners,
      'popup'   => $popup
    ]);
  }
}
