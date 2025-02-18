<?php

namespace App\Console\Commands\Mail;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Out\Listdriver;
use App\Mail\Report\ReportBasicMail;
use App\Models\Out\Ecotrilce;
use App\Mail\Out\BecaMail;

class MailBecaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendmailbeca';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail´s beca Trilce.';

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
       $users = Ecotrilce::where('send2', '=', '0')->limit(5)->get();

       foreach ($users as $user) {

         if(!filter_var($user->email, FILTER_VALIDATE_EMAIL)){
           return;
         }else{

               $count = Listdriver::where('id', '=', '3')->first();

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

               if($count->count == 4000 || $count->count == 8000){
                 $marcela = new \stdClass();
                 $marcela->name = 'Marcela';
                 $marcela->email = 'mdellafredad@trilce.edu.pe';
                 $marcela->report = 'Enviados hasta el momento > ' . $count->count;
                 $marcela->subject = 'Informe masivo mail:beca';
                 Mail::send( new ReportBasicMail($marcela) );
               }

               Mail::send( new BecaMail($user) );
               $user->update(['send2' => 1]);
               $count->update(['count' => $count->count + 1]);

         }

       }

     }
}
