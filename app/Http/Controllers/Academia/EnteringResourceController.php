<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\Academia\EnteringResource;
use App\Models\Academia\EnteringModel;
use App\Models\UniversityModel as University;

class EnteringResourceController extends Controller
{
    public function show($university, $year)
    {
      $university = University::validate($this->l($university));
      
      if(!$university)
        return abort(404);
      
      $request = EnteringModel::where('university_id_entering', '=', $university->id)
                              ->whereYear('created_at', '=', $year)
                              ->get();
      return new EnteringResource($request);
    }
    
    /**
     * Clear string url
     *
     * @param  String  $request
     * @return Response
     */
    private function l($str)
    {
      return ucwords(str_replace('-', ' ', $str));
    }
    
}
