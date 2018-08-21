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
            'imagen' => 'carrusels/August2018/nAhOAdC4PPjZX9VhpQyY.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'Crossfit-Squat-4K-3555x2000.jpg',
            'imagen' => 'carrusels/August2018/u9gDqo4M3TbwALwj1g7A.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'STIVSPORT-sardegna-stiv-blog-copertina-articoli.jpg',
            'imagen' => 'carrusels/August2018/Led1Hhs47cX4prwa4csQ.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => '9ab6f4588d7051a0698e9b1b89386e49.jpg',
            'imagen' => 'carrusels/August2018/vGcwjKKr0iA9Ng9kndab.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'bsn_rich_2012CrossFitChampion.jpg',
            'imagen' => 'carrusels/August2018/VMSQiaa2MLw23sqwfsVu.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'Dieata.jpg',
            'imagen' => 'carrusels/August2018/Q1O0EAJYfk6dKqgX0CWi.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'weight-training.jpg',
            'imagen' => 'carrusels/August2018/q4mkZIvIe6zhtzokrw1P.jpg',
          ],
          [
            'autor' => 'Desconocido',
            'descripcion' => 'Thumb',
            'imagen' => 'carrusels/August2018/WAZAgTAD6dF8dyJj9YaU.jpg',
          ],

        ];

        carrusel::insert($carrusels);
    }
}
