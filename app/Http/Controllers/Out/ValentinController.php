<?php

namespace App\Http\Controllers\Out;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Out\ValentinResource;
use App\Models\Out\Valentin;
use Image;
use Storage;

class ValentinController extends Controller
{
    public function insert(Request $request)
    {

      $mensaje = str_replace("\n", " ", $request->mensaje);
      $mensaje = explode(" ", $mensaje);

      $mensaje2 = '';

      for ($i=0; $i < count($mensaje); $i++) { 
      	$mensaje2 .= $mensaje[$i]. ' ';

      	if(($i== 0 ? 1 : $i) % 6 == 0) $mensaje2 .= "\n";
      }

      $img = storage_path('app/public/static/images/other/valentin-template.png');

      $img = Image::make($img);
      $img = $img->text("Para: " . $request->para, 350, 310, function($font) {
        $font->file(resource_path('assets/fonts/33FA0F_E_0.ttf'));
        $font->size(30);
        $font->color('#f4633a');
        $font->align('center');
        $font->valign('top');
      });

      $img = $img->text($request->de, 350, 666, function($font) {
        $font->file(resource_path('assets/fonts/33FA0F_E_0.ttf'));
        $font->size(30);
        $font->color('#f4633a');
        $font->align('center');
        $font->valign('top');
      });


      $img = $img->text($mensaje2, 355, 400, function($font) {
        $font->file(resource_path('assets/fonts/33FA0F_E_0.ttf'));
        $font->size(24);
        $font->color('#53565a');
        $font->align('center');
        $font->valign('top');
      });


      $img = $img->encode('jpg', 100);
      $hash = md5($img->__toString());

      Storage::put("public/static/images/other/valentin/{$hash}.jpg", $img);

      $url = "/storage/static/images/other/valentin/{$hash}.jpg";

      $valentin = new Valentin;
      $valentin->de 	 = $request->de;
      $valentin->para 	 = $request->para;
      $valentin->mensaje = $request->mensaje;
      $valentin->hash 	 = $hash;
      $valentin->save();

      $v = Valentin::where('hash', $hash)->first();

      return new ValentinResource(collect([
        'state'     => 'ok',
        'url'		=> $url,
        'id'		=> $v->id
      ]));
    }

    public function read($id)
    {
      $v = Valentin::find($id);
      $url = "/storage/static/images/other/valentin/{$v->hash}.jpg";

      return new ValentinResource(collect([
        'state'     => 'ok',
        'url'		=> $url,
        'id'		=> $v->id
      ]));
    }

    public function download($id)
    {
      $v = Valentin::find($id);
      $url = storage_path("app/public/static/images/other/valentin/{$v->hash}.jpg");
      $name = 'Un-mensaje-para-ti.jpg';
      $headers = ['Content-Type: image/jpeg'];
      return response()->download($url, $name, $headers);
    }
}
