<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SolutionRequest;
use App\Models\Academia\Solution;
use App\Models\UniversityModel as University;

class SolutionResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $university = University::findOrFail(strip_tags($_GET['id']));
        $solutions  = Solution::where('university_id', $university->id)
        ->orderBy('created_at', 'desc')
        ->get();

        return view('admin.solutions.index')
            ->with([
                'university' => $university,
                'solutions'  => $solutions
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.solutions.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolutionRequest $request)
    {
        $request->validated();
        $new = new Solution;
        $new->fill($request->all());
        $new->save();
        return redirect()->route('solutions.index', ['id' => $request->university_id])->with('success', 'Creado correctamente');
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
        $solution = Solution::findOrFail($id);
        return view('admin.solutions.edit')->with('solution', $solution);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SolutionRequest $request, $id)
    {
        $request->validated();
        Solution::findOrFail($id)->update($request->all());

        return redirect()
        ->action('Admin\SolutionResource@edit', $id)
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
        Solution::findOrFail($id)->delete();
        return redirect()->route('solutions.index', ['id' => $request->id_university])->with('success', 'Eliminado correctamente');
    }
}
