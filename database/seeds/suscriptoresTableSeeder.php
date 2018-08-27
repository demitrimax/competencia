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
            'premium' => 1,
          ],
          [
            'nombre' => 'Israel',
            'apellidos' => 'Garcia',
            'fecnac' => '1983-06-29',
            'edad' => 35,
            'genero' => 'H',
            'telefono' => '9931202470',
            'tcompetencia_id' => 1,
            'email' => 'israel_hp@hotmail.com',
            'password' => bcrypt('israelgarcia'),
            'premium' => 1,
          ],
          [
            'nombre' => 'Abner',
            'apellidos' => 'Cerino Leon',
            'fecnac' => '1987-08-06',
            'edad' => 30,
            'genero' => 'H',
            'telefono' => '9931444426',
            'tcompetencia_id' => 3,
            'email' => 'enoc_cerino@hotmail.com',
            'password' => '$2y$10$vTx4vdTsRHPM1v.ewZWreuAaOfpfyPggPhljJ2vRm9GWHxLp/mnGC',
            'premium' => 1,
          ],
          [
            'nombre' => 'Cosme Israel',
            'apellidos' => 'Palma juarez',
            'fecnac' => '1994-03-20',
            'edad' => 24,
            'genero' => 'H',
            'telefono' => '9932599266',
            'tcompetencia_id' => 13,
            'email' => 'cpalmajuarez@gmail.com',
            'password' => '$10$XWLA8DOWfkIgQWBLy76S0uQzfvC6zzy2mOLsOeBbfo6fXi8eYaoTO',
            'premium' => 1,
          ],
        ];
        suscriptores::insert($suscriptores);
        //model factory
        factory(suscriptores::class, 200)->create();
    }
}
