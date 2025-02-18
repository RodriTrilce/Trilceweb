<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VenuesController extends Controller
{
    public function index()
    {
    	return view('/academia/venues');
    }
}
