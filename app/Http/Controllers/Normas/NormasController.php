<?php

namespace App\Http\Controllers\Normas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NormasController extends Controller
{
    public function index()
    {
      return view('/normas/normas');
    }

}
