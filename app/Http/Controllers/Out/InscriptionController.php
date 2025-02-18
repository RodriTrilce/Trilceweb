<?php

namespace App\Http\Controllers\Out;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\Out\Inscription;
use App\Mail\Out\Inscription as InscriptionMail;

class InscriptionController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Inscription::create($request->all());
        Mail::send( new InscriptionMail( $data ) );
    }
}
