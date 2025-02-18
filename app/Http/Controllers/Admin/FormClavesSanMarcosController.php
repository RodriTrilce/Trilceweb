<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Landing\FormClavesSanMarcos;

class FormClavesSanMarcosController extends Controller
{
	public function index()
	{
		$claves = FormClavesSanMarcos::all();
		return view('admin.forms.claves')
		->with('claves', $claves);
	}
}
