<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class DownloadController extends Controller
{
    public function download($id, $slug='')
    {
		$file = File::find($id);

		if(!isset($file->name))
		return abort(404);

		return response()->download(
			$file->downloadUrl(),
			$file->nameSlugExtension()
		);
	}
}
