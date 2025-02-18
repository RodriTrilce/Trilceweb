<?php

namespace App\Console\Commands\Mail;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Mail;
use App\Models\Out\Listdriver;

use App\Mail\Out\BienvenidoClasesMail;

use App\Models\Out\MailOut;


class MailBienvenidoClases extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send_mail_out';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envio masivo bienvenido a clases';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // 5 correos por minuto =  300 por hora * 5 horas = 1500 correos.
        $users = MailOut::where('send1', '=', '0')->limit(5)->get();

        foreach ($users as $user) {
          $count = Listdriver::where('id', '=', '10')->first();

          Mail::send( new BienvenidoClasesMail($user) );
          $user->update(['send1' => 1]);
          $count->update(['count' => $count->count + 1]);

        }
    }
}
