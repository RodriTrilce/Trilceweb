<?php

namespace App\Mail\Out;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PrimerPuestoPUCP extends Mailable
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
      return $this->from(env('MAIL_DEFAULT_SENDER'), env('MAIL_FROM_NAME'))
                  ->to($this->data->email)
                  ->subject('Nuestro alumno obtuvo el máximo puntaje en el examen de admisión PUCP 🥇 ')
                  ->view('resources.mail.out.primer_puesto_pucp.finish')
                  ->text('resources.mail.out.primer_puesto_pucp.finish_plain')
                  ->with(
                    [
                      'data' => $this->data
                    ]);
    }
}
