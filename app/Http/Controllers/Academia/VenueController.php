<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Academia\VenueModel as VenueDB;
use Meta;

class VenueController extends Controller
{
    public function index($barrack)
    {
      $venue = VenueDB::where('name', $this->l($barrack))->first();
      
      if(!isset($venue->name))
        return abort(404);

      Meta::set('title', 'Academia Trilce | Sede '. $venue->name);
      Meta::set('description', $venue->description);
      
      return view('/academia/venue')->with([
        'data' => $venue,
        'page' => 'venue'
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

