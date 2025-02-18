<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationalProposalController extends Controller
{
    public function index()
    {
      return view('colegio.educational_proposal');
    }
}
