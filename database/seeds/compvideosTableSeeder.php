<?php

use Illuminate\Database\Seeder;
use App\compvideos;

class compvideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(compvideos::class, 250)->create();
    }
}
