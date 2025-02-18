<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

use App\Models\Academia\SimulacrumModel as Simulacrum;
use App\Models\UniversityModel as University;
use Meta;


class SimulacrumController extends Controller
{

     public function index($university)
     {
        $university = University::validate( ucwords(Str::slug($university, ' ')) );
        
        //if(!$university)
        //  return abort(404);

        if($university->short_name=='')
        {
          Meta::set('title', 'Academia Trilce | Simulacros de examen de admisión');
          Meta::set('description', 'Simulacros para el examen de admisión');
        }
        elseif($university->short_name=='UNI')
        {
          Meta::set('title', 'Academia Trilce | Simulacros de examen de admisión de la UNI');
          Meta::set('description', 'Simulacros para el examen de admisión de la Universidad Nacional de Ingeniería (UNI)');
        }
        elseif($university->short_name=='San Marcos')
        {
          Meta::set('title', 'Academia Trilce | Simulacros de examen de admisión de San Marcos');
          Meta::set('description', 'Simulacros para el examen de admisión de San Marcos (UNMSM)');
        }
        else
        {
          Meta::set('title', 'Academia Trilce | Simulacros de examen de admisión de la Católica');
          Meta::set('description', 'Simulacros para el examen de admisión de la Católica (PUCP)');
        }

        $results = Simulacrum::where('university_id', $university->id)
        ->orderBy('created_at', 'DESC')
        ->limit(5)
        ->get();

       return view('/academia/simulacrum')->with([
         'university' => $university,
         'data' => $results
       ]);
     }

     public function web()
     {
      Meta::set('title', 'Colegio y Academia Trilce | Simulacros');
      Meta::set('description', 'Simulacros');
      return view('/academia/simulacrum')->with(['page' => 'simulacrum']);
     }

     public function show($university)
     {
        $university = University::validate( ucwords(Str::slug($university, ' ')) );
        
        //if(!$university)
        //  return abort(404);
        
        $results = Simulacrum::where('university_id', $university->id)
        ->orderBy('created_at', 'DESC')
        ->get();

       return view('/academia/simulacrum_results')->with([
         'university' => $university,
         'data' => $results
       ]);
     }

}
