<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shortlink;
use App\Http\Requests\Admin\ShortlinkRequest;

class ShortlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Shortlink::all();
        return view('admin.shortlink.index')->with('links', $links);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shortlink.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShortlinkRequest $request)
    {
        $request->validated();
        $new = new Shortlink();
        $new->slug = str_slug($request->slug, '-');
        $new->url = $request->url;
        $new->save();

        return redirect()->route('shortlink.index')->with('success', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $short = Shortlink::where('slug', $slug)->first();

        if(is_null($short))
        {
            return redirect('https://www.trilce.edu.pe/');
        }

        return redirect($short->url, 302);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = Shortlink::findOrFail($id);
        return view('admin.shortlink.edit')->with('link', $link);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShortlinkRequest $request, $id)
    {
        $data = $request->validated();
        
        Shortlink::find($id)->update([
            'slug' => str_slug($data['slug']),
            'url'  => $data['url']
        ]);

        return redirect()
        ->action('Admin\ShortlinkController@edit', $id)
        ->with('success', 'Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shortlink::findOrFail($id)->delete();
        return redirect()->route('shortlink.index')->with('success', 'Eliminado correctamente');
    }
}
