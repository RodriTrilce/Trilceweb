<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationFormContact;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index()
  {
    return view('/academia/contact')->with(['page' => 'contact']);
  }

  public function send(ValidationFormContact $request)
  {
    $request->validated();

    Mail::send( new ContactForm( $request ) );

    return redirect()->route('academia-index')->with([
      'name'      => $request->contact_names,
      'contact'   => true
    ]);
  }
}
