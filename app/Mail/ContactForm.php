<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
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
        return $this->from( env('MAIL_DEFAULT_SENDER') )
                    ->to( env('MAIL_DEFAULT_SENDER') )
                    ->view('resources.mail.contact')
                    ->text('resources.mail.contact_plain')
                    ->with(
                      [
                            'name'    => $this->data->contact_names,
                            'content' => $this->data->contact_message,
                            'phone'   => $this->data->contact_phone,
                            'email'   => $this->data->contact_email,
                            'type'    => $this->data->contact_type
                      ]);
    }
}
