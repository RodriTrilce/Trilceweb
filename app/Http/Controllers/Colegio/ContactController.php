<?php

namespace App\Http\Controllers\Colegio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationFormContact;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index()
  {
    return view('/colegio/contact')->with(['page' => 'contact']);
  }

  public function send(ValidationFormContact $request)
  {
    $request->validated();

    Mail::send( new ContactForm( $request ) );

    return redirect()->route('colegio-educationalproposal')->with([
      'name'    => $request->contact_names,
      'contact'  => true
    ]);
  }
}
