<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TutorialsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
     return view('/academia/tutorials')->with(['page' => 'tutorials']);
   }
}
