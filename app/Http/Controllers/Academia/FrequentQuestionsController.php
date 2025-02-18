<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrequentQuestionsController extends Controller
{
    public function index()
    {
      return view('/academia/frequent_questions');
    }

}
