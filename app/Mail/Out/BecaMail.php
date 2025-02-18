<?php

namespace App\Mail\Out;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BecaMail extends Mailable
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
                  ->subject('¡Gana 1/8 de beca para tu hijo!')
                  ->view('resources.mail.out.beca.finish')
                  ->text('resources.mail.out.beca.finish_plain')
                  ->with(
                    [
                      'data' => $this->data
                    ]);
    }
}
