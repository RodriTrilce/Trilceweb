<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\UniversityModel as University;
use App\Models\Academia\EnteringModel;

class EnteringController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index($university)
   {
      $university = University::validate($this->l($university));
      
      if(!$university)
        return abort(404);
     
     return view('/academia/entering')->with([
       'university' => $university
     ]);
   }
   

  /**
   * Clear slug string
   *
   * @return string
   */
  private function l($str)
  {
    return ucwords(str_replace('-', ' ', $str));
  }

}
