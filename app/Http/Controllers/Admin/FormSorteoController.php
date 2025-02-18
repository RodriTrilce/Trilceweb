<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Landing\FormSorteoModel;

class FormSorteoController extends Controller
{

	public function index()
	{
		$sorteos = FormSorteoModel::all();
		return view('admin.forms.sorteo')
		->with('sorteos', $sorteos);
	}
}
