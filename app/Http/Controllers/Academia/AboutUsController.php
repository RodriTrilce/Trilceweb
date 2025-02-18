<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Meta;

class AboutUsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      Meta::set('title', 'Colegio y Academia Trilce | Nuestra historia');
      Meta::set('description', '18 sedes en Lima, 6 en provincia, academias, 2000 trabajadores y más de 24000 alumnos.');
      return view('/academia/about_us')->with(['page' => 'about_us']);
   }
}
