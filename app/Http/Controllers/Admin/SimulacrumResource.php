<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\SimulacrumRequest;


use App\Models\Academia\SimulacrumModel as Simulacrum;
use App\Models\UniversityModel as University;

class SimulacrumResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $university = University::findOrFail(strip_tags($_GET['id']));
        $all = Simulacrum::where('university_id', $university->id)->get();
        return view('admin.simulacrum.index')->with([
            'simulacros' => $all,
            'university' => $university
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.simulacrum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SimulacrumRequest $request)
    {
        $request->validated();
        $new = new Simulacrum;
        $new->fill($request->all());
        $new->save();
        return redirect()->route('simulacrum.index', ['id' => $request->university_id])->with('success', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $simulacro = Simulacrum::findOrFail($id);
        return view('admin.simulacrum.edit')->with('simulacro', $simulacro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SimulacrumRequest $request, $id)
    {
        $request->validated();
        $simulacro = Simulacrum::findOrFail($id)->update($request->all());

        return redirect()
        ->action('Admin\SimulacrumResource@edit', $id)
        ->with('success', 'Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Simulacrum::findOrFail($id)->delete();
        return redirect()->route('simulacrum.index', ['id' => $request->id_university])->with('success', 'Eliminado correctamente');
    }
}
