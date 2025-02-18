<?php
namespace App\Http\Controllers\Academia;

use \Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Academia\MathOlympicsModel;

class MathOlympicsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {

     $lima = MathOlympicsModel::whereNull('isprovince')
     ->whereYear('finish_at', '=', date("Y"))
     ->orderBy('finish_at', 'asc')
     ->get();

     $province = MathOlympicsModel::where('isprovince',  '=', '1')
     ->whereYear('finish_at', '=', date("Y"))
     ->orderBy('finish_at', 'asc')
     ->get();

     return view('/academia/math_olympics')->with([
       'lima'       => $lima,
       'province'   => $province,
       'data'       => $lima->merge($province),
     ]);
   }
}
