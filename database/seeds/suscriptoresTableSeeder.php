<?php

use Illuminate\Database\Seeder;
use App\suscriptores;

class suscriptoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //model factory
        factory(suscriptores::class, 100)->create();
    }
}
