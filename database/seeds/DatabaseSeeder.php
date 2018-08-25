<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(postTableSeeder::class);
        $this->call(pagesTableSeeder::class);
        $this->call(carruselsTableSeeder::class);
        $this->call(motivadorasTableSeeder::class);
        $this->call(tcompetenciasTableSeeder::class);
        $this->call(suscriptoresTableSeeder::class);//seder opcional
        $this->call(compvideosTableSeeder::class); //seder opcional
    }
}
