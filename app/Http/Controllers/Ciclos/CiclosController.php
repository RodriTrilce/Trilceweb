<?php

namespace App\Http\Controllers\Ciclos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CiclosController extends Controller
{
    public function uniAnual()
    {
        return view('/ciclos/uni/anual');
    }

    public function uniSemestral()
    {
        return view('/ciclos/uni/semestral');
    }

    public function uniVerano()
    {
        return view('/ciclos/uni/verano');
    }

    public function uniRepaso()
    {
        return view('/ciclos/uni/repaso');
    }
}
