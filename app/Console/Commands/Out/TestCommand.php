<?php

namespace App\Console\Commands\Out;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
//use App\Models\Out\Ecotrilce;
use App\Models\Out\Testmail;
use App\Mail\Out\EcotrilceMail;
use App\Models\Out\Listdriver;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:testmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prueba de email';

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
      $users = Testmail::where('send1', '=', '0')->get();

      foreach ($users as $user) {
        $count = Listdriver::where('id', '=', '1')->first();

        if($count->count == 5){
          return;

        }else{
          Mail::send( new EcotrilceMail($user) );
          $user->update(['send1' => 1]);
          $count->update(['count' => $count->count + 1]);
        }
      }

    }
}
