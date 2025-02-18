<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Academia\MathOlympicsModel as MathOlympics;
use App\Models\Academia\VenueModel as VenueAcademia;
use App\Models\Colegio\VenueModel as VenueColegio;
use App\Models\File;
use \Mimey\MimeTypes as Mime;

use Storage;

// Requests
use App\Http\Requests\Admin\StoreMathOlympics;

class MathOlympicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = MathOlympics::all();
      return view('admin.math_olympics.index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.math_olympics.create')->with([
        'venueColegio'  => VenueAcademia::all(),
        'venueAcademia' => VenueColegio::all()
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMathOlympics $request)
    {
      $data = $request->validated();

      if($request->file('base_url'))
      {
        $file = $this->storeBaseRules($request);
      }

      $new = new MathOlympics;
      $new->title = $request->title;
      $new->type = $request->type;
      $new->grade = $request->grade;
      $new->venue = $request->venue;

      if(!empty($file))
      {
        $new->file_id = $file->id;
      }

      $new->inscription_url = $request->inscription_url;
      $new->inscription_group_url = $request->inscription_group_url;
      $new->finish_at = $request->finish_at;
      $new->save();

      return redirect()->route('math-olympics.index')->with('success', 'Creado correctamente');
    }

    public function storeBaseRules($request)
    {
      $mime = new Mime;
      $file = new File;

      $file->token              = date("Y-m", strtotime($request->finish_at)) . '-bases-' . str_slug($request->venue);
      $file->type               = 'pdf';
      $file->mime               = $request->file('base_url')->getMimeType();
      $file->extension          = $mime->getExtension($request->file('base_url')->getMimeType());
      $file->location_folder    = 'academia/documents/olimpiadas-matematicas';
      $file->name               = 'Bases olimpiadas matemáticas ' . $request->venue;
      $file->size               = $request->file('base_url')->getClientSize();
      $file->save();

      $request->file('base_url')->storeAs('public/' . $file->location_folder, $file->token. '.' . $file->extension);

      return $file;
    }

    public function updateBaseRules($file, $request)
    {
      if($file){
        $this->deleteBaseRules($file);
      }
      return $this->storeBaseRules($request);
    }

    public function deleteBaseRules($file)
    {
      Storage::delete('public/' . $file->location_folder . '/' . $file->token . '.' . $file->extension);
      $file->delete();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $olympic = MathOlympics::find($id);
      
      return view('admin.math_olympics.edit')->with([
        'olympic' => $olympic
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMathOlympics $request, $id)
    {
      $data = $request->validated();


      $olympic = MathOlympics::find($id);

      if($request->file('base_url'))
      {
        $file = $this->updateBaseRules($olympic->baseRules, $request);
      }
/*
      if(isset($request->file('base_url'))){
        echo 'ELIMINAR !!!';
        die;
        $this->deleteBaseRules($olympic->baseRules);
      }
*/
      $olympic->title = $request->title;
      $olympic->type = $request->type;
      $olympic->grade = $request->grade;
      $olympic->venue = $request->venue;

      if(!empty($file))
      {
        $olympic->file_id = $file->id;
      }

      $olympic->inscription_url = $request->inscription_url;
      $olympic->inscription_group_url = $request->inscription_group_url;
      $olympic->finish_at = $request->finish_at;
      $olympic->isprovince =$request->isprovince;
      $olympic->save();

      return redirect()->action('Admin\MathOlympicsController@edit', $id)->with('success','Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $delete = MathOlympics::find($id);
      $file   = $delete->baseRules;

      $this->deleteBaseRules($file);

      $delete->delete();
      return redirect()->route('math-olympics.index')->with('success', 'Eliminado correctamente');
    }

    private function getBaseRules($result)
    {
      return storage_path('app/public/') . $result->location_folder . $result->token . '.' . $result->extension;
    }
}
