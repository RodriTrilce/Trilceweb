<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerCreateRequest;
use App\Models\BannersModel as Banner;
use App\Models\File;
use \Mimey\MimeTypes as Mime;
use Storage;
use Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;


class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Banner::where([
          ['type',    '=', $_GET['type']],
          ['deleted', '=', '0']
        ])
        ->orderBy('position', 'asc')
        ->get();

        return view('admin/banners/index')
        ->with([
          'banners' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/banners/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerCreateRequest $request)
    {
      $request->validated();

      $banner = new Banner;

      $banner->title  = $request->title;
      $banner->content   = $request->content;

      $banner->type   = $request->type;
      $banner->state = '1';
      $banner->start = $request->start;
      $banner->expire = $request->expire;

      /*
        $file = $this->storeBannerImage($request);
        $banner->file_id = $file->id;
      */
      
      $position = Banner::where([
        ['type', '=', $request->type],
        ['state', '=', '1']
      ])
      ->orderBy('position', 'desc')
      ->take(1)
      ->get();

      $banner->position = (!isset($position[0]->position)?0:$position[0]->position+1);

      $banner->save();

      return back()->with('success', 'Banner creado correctamente');
    }

    public function storeBannerImage($request)
    {
      $mime   = new Mime;
      $file   = new File;

      $file->token              = date("djo") . str_random(10);
      $file->type               = 'image';
      $file->mime               = $request->file('image')->getMimeType();
      $file->extension          = $mime->getExtension($request->file('image')->getMimeType());
      $file->location_folder    = 'static/images/banner';
      $file->name               = $request->title;
      $file->dimension          = '1920×500';
      $file->size               = $request->file('image')->getClientSize();
      $file->save();

      $image = Image::make($request->file('image'));

      Storage::put('public/' . $file->location_folder . '/' . $file->token. '.' . $file->extension, $image->encode(null, 80));

      $optimizerChain = OptimizerChainFactory::create();
      $optimizerChain->optimize(getcwd() . Storage::url($file->location_folder . '/' . $file->token . '.' . $file->extension));

      return $file;
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
        $banner = Banner::find($id);
        return view('admin.banners.edit')->with(['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerCreateRequest $request, $id)
    {
      $request->validated();

      $banner = Banner::find($id);

      $banner->title    = $request->title;
      $banner->content  = $request->content;

      $banner->state    = ($request->state == 'on' ? 1 : 0);
      $banner->type     = $request->type;
      $banner->start    = $request->start;
      $banner->expire   = $request->expire;

      $banner->save();

        return back()->with('success', 'Banner actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner  = Banner::find($id);
        $banners = Banner::where([
          ['type', '=', $banner->type],
          ['state', '=', '1']
        ])
        ->orderBy('position', 'asc')
        ->get();

        $position = $banner->position;

        $banners->search(function ($item, $key) use ($banners, $position) {
          if($item->position == $position)
            $banners->pull($key);
        });

        $i = 0;
        foreach ($banners as $itemBanner) {
          $itemBanner = Banner::find($itemBanner->id);
          $itemBanner->position = $i;
          $banner->save();
          $i++;
        }

        // Deleted = 1 --> Banner eliminado (archivado en la db)
        // State = 0 --> banner desactivado visiblemente en el sitio web, pero visible en el administrador

        $banner->deleted  = '1';
        $banner->state    = '0';
        $banner->save();

        return back()->with('success', 'Banner eliminado correctamente');
    }

    public function storePositions(Request $request)
    {
      $positions = json_decode($request->positions);
      foreach ($positions as $position) {
        $banner = Banner::find($position->id);
        $banner->position = $position->position;
        $banner->save();
      }

      echo json_encode(['status' => 'ok']);
    }
}
