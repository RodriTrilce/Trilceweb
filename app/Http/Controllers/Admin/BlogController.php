<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCreateRequest;
use App\Models\GalleryBlogModel as Gallery;
use App\Models\Post;
use \Mimey\MimeTypes as Mime;
use Illuminate\Support\Str;
use Purifier;
use Storage;
use Image;

class BlogController extends Controller
{
    public function index()
    {
        $data = Post::where('type', 'blog')->get();
        return view('admin.blog.index', compact('data'));
    }

    public function create()
    {
        return view('admin.blog.create')->with(['mode' => 'new']);
    }

    public function store(BlogCreateRequest $request)
    {
        $validated = $request->validated();
        
        // Verificar si ya hay un post marcado como principal en la categoría seleccionada
        $existingMarkerPost = Post::where('site', $request->site)->where('marker', '1')->first();
        
        // Crear un nuevo post
        $post = new Post;
        $post->file_id  = 0;
        $post->site     = $request->site;
        $post->title    = $request->title;
        $post->slug     = Str::slug($request->title);
        $post->content  = Purifier::clean($request->content);
        $post->visible  = '1';
        $post->approved = '1';
        
        // Si ya existe un post marcado, entonces este nuevo post no estará marcado como principal
        if ($existingMarkerPost) {
            $post->marker = '0'; // No se marca como principal
        } else {
            $post->marker = $request->has('marker') ? '1' : '0'; // Marcarlo si el checkbox está marcado
        }
    
        $post->created_at = $request->created_at ?? now();
        $post->save();
    
        // Guardar imágenes y otros detalles...
        $gallery = Gallery::create(['post_id' => $post->id]);
    
        if ($request->hasFile('image')) {
            $asignada = false;
    
            foreach ($request->file('image') as $image) {
                $token = Str::random(16);
                $imageReturn = $this->storeImage($image, $token, $gallery, '900x650', $request, $post);
                $this->storeImage($image, $token, $gallery, '290x290', $request, $post);
    
                if ($image->getClientOriginalName() === $request->markerimage) {
                    $post->file_id = $imageReturn->id;
                    $post->save();
                    $asignada = true;
                }
    
                if (!$asignada) {
                    $post->file_id = $imageReturn->id;
                    $post->save();
                    $asignada = true;
                }
            }
        }
    
        return back()->with('success', 'Post creado correctamente');
    }
    
    
    
    

    public function storeImage($image, $token, $gallery, $dimension, $request, $post)
    {
        $mime        = new Mime;
        $img         = Image::make($image);
        $token       = $gallery->post_id . '_' . $token;
        $tokenSave   = $token . '_' . $dimension;
        $extension   = $mime->getExtension($image->getMimeType());
        $size        = $image->getSize();
        $dim         = explode('x', $dimension);
    
        // Ajustar dimensiones
        $img->fit($dim[0], $dim[1]);
    
        // Guardar imagen en disco
        Storage::put("public/static/images/blog/{$tokenSave}.{$extension}", $img->encode(null, 80));
    
        // Registrar imagen principal
        if ($dimension === '900x650') {
            $imageRecord = $gallery->images()->create([
                'token'           => $token,
                'type'            => 'image',
                'mime'            => $image->getMimeType(),
                'extension'       => $extension,
                'location_folder' => 'static/images/blog',
                'name'            => 'none',
                'size'            => $size,
                'dimension'       => $dimension
            ]);
    
            // Si es la imagen principal (900x650), se marca como la principal
            if ($image->getClientOriginalName() === $request->markerimage) {
                $post->file_id = $imageRecord->id;
                $post->save();
            }
    
            return $imageRecord;
        }
    
        return true;
    }
    

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.blog.edit', compact('post'));
    }

    public function update(BlogCreateRequest $request, $id)
    {
        $validated = $request->validated();
    
        $post = Post::findOrFail($id);
        $post->title    = $request->title;
        $post->slug     = Str::slug($request->title);
        $post->content  = Purifier::clean($request->content);
        $post->site     = $request->site;
    
        // Solo actualizar el marker si el post está en la categoría seleccionada
        if ($request->site == $post->site) {
            $post->marker   = $request->has('marker') ? '1' : '0';  // Actualizar el estado del campo marker
        }
    
        $post->visible  = $request->has('visible') ? '1' : '0';
        $post->approved = $request->has('approved') ? '1' : '0';
        $post->save();
    
        return back()->with('success', 'Actualizado correctamente');
    }
    
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $gallery = Gallery::where('post_id', $id)->first();

        if ($gallery) {
            foreach ($gallery->images as $image) {
                // Eliminar imagen principal
                $mainPath = storage_path("app/public/{$image->location_folder}/{$image->token}_{$image->dimension}.{$image->extension}");
                if (file_exists($mainPath)) unlink($mainPath);

                // Eliminar thumbnail (suponiendo 290x290)
                $thumbPath = storage_path("app/public/{$image->location_folder}/{$image->token}_290x290.{$image->extension}");
                if (file_exists($thumbPath)) unlink($thumbPath);
            }

            $gallery->images()->delete();
            $gallery->delete();
        }

        $post->delete();

        return redirect('/admin/blog')->with('success', 'Post eliminado correctamente');
    }

    public function toggleMarker($id)
{
    $post = Post::findOrFail($id);
    $post->marker = $post->marker == '1' ? '0' : '1';
    $post->save();

    return redirect()->back()->with('success', 'Marcado actualizado correctamente.');
}

}
