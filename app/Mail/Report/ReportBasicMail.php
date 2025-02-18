<?php

namespace App\Mail\Report;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReportBasicMail extends Mailable
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
       return $this->from(env('MAIL_DEFAULT_SENDER'), '~ Reporte mail Trilce')
                   ->to($this->data->email)
                   ->subject($this->data->subject)
                   ->view('resources.mail.report.basic.template')
                   ->text('resources.mail.report.basic.template_text')
                   ->with(
                     [
                           'data'    => $this->data
                     ]);
     }
}
