<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Academia\MathOlympicsModel as MathOlympics;
use \Mimey\MimeTypes as Mime;
use Storage;
use Date;

class MathOlympicsResultsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      $result = MathOlympics::find($request->matholympic_id);
      $mime   = new Mime;

      $i=0;
      foreach ($request->file('file_type') as $uploadme) {
        $token            = 'resultados-' . str_slug($result->venue) . '-' . str_slug($request->file_name[$i] . '-' . Date::parse($result->finish_at)->format("d-m-Y") );
        $location_folder  = 'academia/documents/olimpiadas-matematicas/resultados';

        $uploadme->storeAs('public/' . $location_folder, $token. '.' . $mime->getExtension($uploadme->getMimeType()));

        $result->results()->create([
          'token'           => $token,
          'type'            => 'pdf',
          'mime'            => $uploadme->getMimeType(),
          'extension'       => $mime->getExtension($uploadme->getMimeType()),
          'location_folder' => $location_folder,
          'name'            => $request->file_name[$i],
          'size'            => $uploadme->getClientSize()
        ]);

        $i++;
      }

      return redirect()
      ->action('Admin\MathOlympicsController@edit', $request->matholympic_id)
      ->with('success', 'Subido correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $file = File::where('id', $request->result_id)->first();
        Storage::delete('public/' . $file->location_folder . '/' . $file->token . '.' . $file->extension);
        $file->delete();

        return redirect()
        ->action('Admin\MathOlympicsController@edit', $request->matholympic_id)
        ->with('success','Resultado eliminado correctamente');
    }
}
