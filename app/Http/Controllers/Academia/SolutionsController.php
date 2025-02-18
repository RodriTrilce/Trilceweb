<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Academia\Solution;
use App\Models\UniversityModel as University;

class SolutionsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index($university)
   {
      $university = University::where('short_name', $this->l($university))->first();
      
      if(empty($university->name))
        return abort(404);
      
      $solutions = Solution::where('university_id', $university->id)
      ->orderBy('created_at', 'desc')
      ->get();

     return view('/academia/solution')->with([
       'university' => $university,
       'solutions'  => $solutions
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
