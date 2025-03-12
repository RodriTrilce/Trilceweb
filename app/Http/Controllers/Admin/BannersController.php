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
    
        $banner->title = $request->title;
        $banner->type = $request->type;
        $banner->state = '1';
        $banner->start = $request->start;
        $banner->expire = $request->expire;
        $banner->content = $request->content ?? 'Valor por defecto';
    
        // Guardar las URLs en lugar de archivos
        $banner->file_desktop_url = $request->file_desktop_url;
        $banner->file_mobile_url = $request->file_mobile_url;
    
        // Posicionamiento del banner
        $position = Banner::where('type', $request->type)->orderBy('position', 'desc')->first();
        $banner->position = $position ? $position->position + 1 : 0;
    
        $banner->save();
    
        return back()->with('success', 'Banner creado correctamente');
    }
    
    

  private function storeBannerImage($file)
  {
      $mime = new \Mimey\MimeTypes;
      $fileModel = new File;
  
      $fileModel->token = date("djo") . str_random(10);
      $fileModel->type = 'image';
      $fileModel->mime = $file->getMimeType();
      $fileModel->extension = $mime->getExtension($file->getMimeType());
      $fileModel->location_folder = 'static/images/banner';
      $fileModel->name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
      $fileModel->dimension = '1920×500'; // Opcional
      $fileModel->size = $file->getSize();
      $fileModel->save();
  
      $image = Image::make($file);
      $filePath = 'public/' . $fileModel->location_folder . '/' . $fileModel->token . '.' . $fileModel->extension;
      Storage::put($filePath, $image->encode(null, 80));
  
      // Optimizar la imagen
      $optimizerChain = \Spatie\ImageOptimizer\OptimizerChainFactory::create();
      $optimizerChain->optimize(storage_path('app/' . $filePath)); 
  
      return $fileModel;
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
    
        $banner->title = $request->title;
        $banner->state = $request->state == 'on' ? 1 : 0;
        $banner->type = $request->type;
        $banner->start = $request->start;
        $banner->expire = $request->expire;
        $banner->content = $request->content ?? 'Valor por defecto';
    
        // Actualizar solo si se envían nuevas URLs
        if ($request->file_desktop_url) {
            $banner->file_desktop_url = $request->file_desktop_url;
        }
    
        if ($request->file_mobile_url) {
            $banner->file_mobile_url = $request->file_mobile_url;
        }
    
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

    public function updateOrder(Request $request)
    {
        foreach ($request->order as $item) {
            Banner::where('id', $item['id'])->update(['position' => $item['position']]);
        }
    
        return response()->json(['message' => 'Orden actualizado correctamente'], 200);
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

