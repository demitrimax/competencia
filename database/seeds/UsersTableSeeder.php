<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

            $usuarios = [
              [
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
              ],
               [
                 'name'           => 'Moises Aguilar',
                 'email'          => 'armandoaguilar1@hotmail.com',
                 'password'       => bcrypt('moisesaguilar'),
                 'remember_token' => str_random(60),
               ],
               [
                 'name'           => 'Israel Garcia',
                 'email'          => 'israel_hp@hotmail.com',
                 'password'       => bcrypt('israelgarcia'),
                 'remember_token' => str_random(60),
               ],
            ];

            User::insert($usuarios);
        }
    }
}
