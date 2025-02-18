<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $files = scandir( dirname(__FILE__) ); //store filenames into $files_array
        foreach ($files as $key => $file){
           if ($file !== 'DatabaseSeeder.php' && $file[0] !== "." ){
               $this->call( explode('.', $file)[0] );
           }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
         
     }
}
