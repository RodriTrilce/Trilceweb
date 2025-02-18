<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrequentQuestionsController extends Controller
{
  public function index()
  {
    return view('/colegio/frequent_questions');
  }
}
