<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentGuideController extends Controller
{
  public function index()
  {
    return view('/colegio/payment_guide');
  }
}
