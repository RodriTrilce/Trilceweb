<?php

namespace App\Console\Commands\Out;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Out\Ecotrilce;
use App\Models\Out\Listdriver;
use App\Mail\Out\EcotrilceMail;
use App\Mail\Report\ReportBasicMail;

class EcotrilceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:eco';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mail ecotrilce';

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
      $users = Ecotrilce::where('send1', '=', '0')->limit(5)->get();

      foreach ($users as $user) {

        if(!filter_var($user->email, FILTER_VALIDATE_EMAIL)){
          return;
        }else{

              $count = Listdriver::where('id', '=', '2')->first();

              if(($count->count % 100) == 0
                   || ($count->count == 1)
                ){
                $franco = new \stdClass();
                $franco->name = 'franco';
                $franco->email = 'fsalcedo@trilce.edu.pe';
                $franco->report = 'Enviado hasta la cantidad numero -> ' . $count->count;
                $franco->subject = 'Envio masivo - Trilce r:' . rand(0,9999);
                Mail::send( new ReportBasicMail($franco) );
              }

              if($count->count == 1500){
                $ronald = new \stdClass();
                $ronald->name = 'Ronald';
                $ronald->email = 'rmori@trilce.edu.pe';
                $ronald->report = 'Se termino el envio, total enviados: ' . $count->count;
                $ronald->subject = 'Envio masivo - Trilce';
                Mail::send( new ReportBasicMail($ronald) );
              }

              if($count->count == 1500){
                return;

              }else{
                  Mail::send( new EcotrilceMail($user) );
                  $user->update(['send1' => 1]);
                  $count->update(['count' => $count->count + 1]);
              }

        }

      }

    }
}
