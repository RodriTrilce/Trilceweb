<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorPdfController extends Controller
{
    public function index()
    {
        return view('admin.pdf_editor.index');
    }
}
