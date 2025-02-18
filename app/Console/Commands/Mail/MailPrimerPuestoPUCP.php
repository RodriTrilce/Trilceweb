<?php

namespace App\Console\Commands\Mail;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Out\Listdriver;
use App\Mail\Report\ReportBasicMail;
use App\Mail\Out\PrimerPuestoPUCP as MailPrimerPuesto;
use App\Models\Out\PrimerPuestoPUCP as ModelPrimerPuestoPUCP;

class MailPrimerPuestoPUCP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendmailpucp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mail masivo pucp primer puesto';

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
        $users = ModelPrimerPuestoPUCP::where('send1', '=', '0')->limit(5)->get();

        foreach ($users as $user) {
          $count = Listdriver::where('id', '=', '4')->first();

          if(($count->count % 100) == 0
               || ($count->count == 1)
               || ($count->count == 5)
               || ($count->count == 10)
               || ($count->count == 30)
               || ($count->count == 50)
               || ($count->count == 80)
            ){
            $franco = new \stdClass();
            $franco->name = 'franco';
            $franco->email = 'fsalcedo@trilce.edu.pe';
            $franco->report = 'Enviado hasta la cantidad numero -> ' . $count->count;
            $franco->subject = 'Envio masivo - Trilce id::' . rand(0,9999);
            Mail::send( new ReportBasicMail($franco) );
          }

          if($count->count == 1000 || $count->count == 3000 || $count->count == 5000 || $count->count == 8000){
            $marcela = new \stdClass();
            $marcela->name = 'Marcela';
            $marcela->email = 'mdellafredad@trilce.edu.pe';
            $marcela->report = 'Enviados hasta el momento > ' . $count->count;
            $marcela->subject = 'Informe masivo mail:beca';
            Mail::send( new ReportBasicMail($marcela) );
          }

          Mail::send( new MailPrimerPuesto($user) );
          $user->update(['send1' => 1]);
          $count->update(['count' => $count->count + 1]);

        }
    }
}
