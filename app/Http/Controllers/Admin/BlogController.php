<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCreateRequest as BlogCreateRequest;
use App\Models\GalleryBlogModel as Gallery;
use App\Models\Post;
use \Mimey\MimeTypes as Mime;
use Purifier;
use Storage;
use Image;

class BlogController extends Controller
{

    public function index()
    {
      $data = Post::where('type', 'blog')->get();
      return view('admin.blog.index')->with(['data' => $data]);
    }

    public function create()
    {
      return view('admin.blog.create')->with(['mode' => 'new']);
    }

    public function store(BlogCreateRequest $request)
    {
      $request->validated();
      $post = new Post;
      $post->file_id  = 0;
      $post->site     = $request->site;
      $post->title    = $request->title;
      $post->content  = Purifier::clean($request->content);
      $post->slug     = str_slug($request->title);

      if($request->visible) $post->visible  = $request->visible;
      if($request->marker)  $post->marker   = $request->marker;

      $post->created_at = $request->created_at;
      $post->approved = '1';
      $post->save();

      $gallery = new Gallery;
      $gallery->post_id = $post->id;
      $gallery->save();

      if($request->file('image')){
        foreach ($request->file('image') as $image) {
          $token       = str_random(16);
          $imageReturn = $this->storeImage($image, $token, $gallery, '900x650');

          $this->storeImage($image, $token, $gallery, '290x290');

          if($image->getClientOriginalName() == $request->markerimage)
          {
            $post->file_id = $imageReturn->id;
            $post->save();
          }
        }
      }

      return back()->with('success', 'Post creado correctamente');
    }

    public function storeImage($image, $token, $gallery, $dimension)
    {
      $mime         = new Mime;
      $imageSave    = Image::make($image);

      $token        = $gallery->post_id . '_' . $token;
      $tokenSave    = $token . '_' . $dimension;
      $extension    = $mime->getExtension($image->getMimeType());
      $dimensionCut = explode('x', $dimension);

      /*
        Tengo un problema de logica:
        No estoy guardando los thumb en la base de datos, pero esto genera problema
        al administrar los archivos. Creo que simplemente no lo guardare, y a eliminar
        el archivo de la foto se tendria que añadir una linea de codigo más para eliminar
        también el thumb.

        En todo caso el else en el if($dimensio..) podria solucionarlo llamnando a \File modelo
      */

      if($dimension == '290x290')
        $imageSave->fit($dimensionCut[0], $dimensionCut[1]);
      else
        $imageSave->fit($dimensionCut[0], $dimensionCut[1]);

      Storage::put('public/static/images/blog/' . $tokenSave . '.' . $extension, $imageSave->encode(null, 80));

      if($dimension == '900x650')
      {
        return $gallery->images()->create([
          'token'           => $token,
          'type'            => 'image',
          'mime'            => $image->getMimeType(),
          'extension'       => $extension,
          'location_folder' => 'static/images/blog',
          'name'            => 'none',
          'size'            => $image->getClientSize(),
          'dimension'       => $dimension
        ]);
      }else{

      }

      return true;
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.blog.edit')->with(['post' => $post]);
    }

    public function update(Request $request, $id)
    {
      $post           = Post::findOrFail($id);

      $post->title    = $request->title;
      $post->content  = Purifier::clean($request->content);
      $post->site     = $request->site;

      $post->marker   = ($request->marker == 'on' ? '1' : '0');
      $post->visible  = ($request->visible == 'on' ? '1' : '0');

      $post->approved = ($request->approved == 'on' ? '1' : '0');

      $post->save();

      return back()->with('success', 'Actualizado correctamente');
    }

    public function destroy()
    {

    }

}
