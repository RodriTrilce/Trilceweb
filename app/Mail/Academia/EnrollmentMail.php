<?php

namespace App\Mail\Academia;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Image;
use Storage;

class EnrollmentMail extends Mailable
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
                  ->to($this->data->step2_email)
                  ->subject('Te enviamos tu ficha de inscripción - Trilce Academia')
                  ->view('resources.mail.academia.enrollment.enrollment_finish')
                  ->text('resources.mail.academia.enrollment.enrollment_finish_plain')
                  ->with(
                    [
                          'data'    => $this->data,
                          'image'   => $this->image($this->data->step2_names)
                    ]);
    }

    private function image($name)
    {
      $img = storage_path('app/public/mail/template-academia-enrollment.jpg');

      $img = Image::make($img);
      $img = $img->text($name, 350, 326, function($font) {
        $font->file(resource_path('assets/fonts/33FA0F_E_0.ttf'));
        $font->size(22);
        $font->color('#FFFFFF');
        $font->align('center');
        $font->valign('top');
      });

      $img = $img->encode('jpg',80);
      $hash = md5($img->__toString());

      Storage::put("public/mail/enrollment/{$hash}.jpg", $img);

      return storage_path("app/public/mail/enrollment/{$hash}.jpg");
    }
}
