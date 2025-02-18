<?php

namespace App\Mail\Out;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Image;
use Storage;

class Inscription extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from(env('MAIL_DEFAULT_SENDER'))
                  ->to($this->data->email)
                  ->subject('Gracias por registrarse - Trilce Academia')
                  ->view('resources.mail.out.inscription.finish')
                  ->text('resources.mail.out.inscription.finish_plain')
                  ->with(
                    [
                          'data'    => $this->data,
                          'image'   => $this->image($this->data->name)
                    ]);
    }

    private function image($name)
    {
      $img = storage_path('app/public/mail/template-out-mail.jpg');

      $img = Image::make($img);
      $img = $img->text($name . "!", 350, 340, function($font) {
        $font->file(resource_path('assets/fonts/33FA0F_E_0.ttf'));
        $font->size(22);
        $font->color('#FFFFFF');
        $font->align('center');
        $font->valign('top');
      });

      $img = $img->encode('jpg',80);
      $hash = md5($img->__toString());

      Storage::put("public/mail/out/{$hash}.jpg", $img);

      return storage_path("app/public/mail/out/{$hash}.jpg");
    }
}
