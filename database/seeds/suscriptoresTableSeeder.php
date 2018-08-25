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
        //suscriptores prueba
        $suscriptores = [
          [
            'nombre' => 'Moises',
            'apellidos' => 'Aguilar',
            'fecnac' => '1981-02-10',
            'edad' => 37,
            'genero' => 'H',
            'telefono' => '9933082770',
            'tcompetencia_id' => 4,
            'email' => 'armandoaguilar1@hotmail.com',
            'password' => bcrypt('moisesaguilar'),
            'premium' => 0,
          ],
          [
            'nombre' => 'Israel',
            'apellidos' => 'Garcia',
            'fecnac' => '1983-06-29',
            'edad' => 35,
            'genero' => 'H',
            'telefono' => '9931202470',
            'tcompetencia_id' => 4,
            'email' => 'israel_hp@hotmail.com',
            'password' => bcrypt('israelgarcia'),
            'premium' => 1,
          ],
        ];
        suscriptores::insert($suscriptores);
        //model factory
        factory(suscriptores::class, 200)->create();
    }
}
