<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Storage;

class prueba extends Controller
{
    public function index()
    {
      $img = storage_path('app/public/mail/template-academia-enrollment.jpg');

      $img = Image::make($img);
      $img = $img->text('Ronald', 350, 326, function($font) {
        $font->file(resource_path('assets/fonts/33FA0F_E_0.ttf'));
        $font->size(22);
        $font->color('#FFFFFF');
        $font->align('center');
        $font->valign('top');

      });
      $img2 = $img;
      $img = $img->encode('jpg',80);
      $hash = md5($img->__toString());

//      Storage::put("public/mail/enrollment/{$hash}.jpg", $img);
//      echo storage_path("app/public/mail/enrollment/{$hash}.jpg");

    $img2 = $img2->encode('data-url');

        echo "<img src=\"$img2\"  />";


    }
}
