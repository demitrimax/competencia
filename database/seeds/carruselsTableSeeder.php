<?php

use Illuminate\Database\Seeder;
use App\carrusel;

class carruselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $carrusels = [
          [
            'autor' => 'Desconocido',
            'descripcion' => '389747151-training-jordan-nike-zxp5-zxp5-1600x900-MM-78.jpg',
            'imagen' => 'carrusels/August2018/04HKlA5J7EltbXTm2IUy.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'Crossfit-Squat-4K-3555x2000.jpg',
            'imagen' => 'carrusels/August2018/6vF9Dvd4ZE6h6A07waw5.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'STIVSPORT-sardegna-stiv-blog-copertina-articoli.jpg',
            'imagen' => 'carrusels/August2018/aofLpTNzb1Pi7eQ9ESCy.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => '9ab6f4588d7051a0698e9b1b89386e49.jpg',
            'imagen' => 'carrusels/August2018/EFqIjunpiKVPUZo6c4w2.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'bsn_rich_2012CrossFitChampion.jpg',
            'imagen' => 'carrusels/August2018/QKb9le2QKKvxODgUR3ax.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'Dieata.jpg',
            'imagen' => 'carrusels/August2018/kFzWvx8pM9oDJZDHcst5.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'weight-training.jpg',
            'imagen' => 'carrusels/August2018/M2h61fCsU7R5YByhVBWm.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'Thumb',
            'imagen' => 'carrusels/August2018/oihl5EsRFwJCFtoaO5oP.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'Imagen de Prueba',
            'imagen' => 'carrusels/August2018/QrrkbGHGXCd4hIMM5Xcc.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'Imagen de Prueba',
            'imagen' => 'carrusels/August2018/X6yBScIpgy5DkgkwEhCr.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'Imagen de Prueba',
            'imagen' => 'carrusels/August2018/XvatnJCJlvwl2WDUKtCh.jpg',
          ],

        ];

        carrusel::insert($carrusels);
    }
}
