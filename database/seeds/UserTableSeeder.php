<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $role_user   = Role::where('name', 'user')->first();
         $role_admin  = Role::where('name', 'admin')->first();
         
         $user = new User();
         $user->name = 'Usuario';
         $user->email = 'user@trilce.edu.pe';
         $user->password = bcrypt('secret');
         $user->save();
         $user->roles()->attach($role_user);
         
         $user = new User();
         $user->name = 'admin';
         $user->email = 'fsalcedo@trilce.edu.pe';
         $user->password = bcrypt('secret');
         $user->save();
         $user->roles()->attach($role_admin);
      }
}
