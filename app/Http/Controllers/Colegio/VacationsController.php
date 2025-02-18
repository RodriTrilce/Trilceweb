<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Colegio\VenueModel;

class VacationsController extends Controller
{
  public function index()
  {
    return view('/colegio/vacations');
  }

  public function venue($barrack)
  {
    $venue = VenueModel::where('slug', $barrack)->first();

    if(!isset($venue->name) || ($venue->vacations==0))
      return abort(404);

    return view('/colegio/vacations_venue')->with([
      'data' => $venue,
      'slug' => $barrack,
      'address' => $venue->address,
      'page' => 'vacations'
    ]);
  }

}
