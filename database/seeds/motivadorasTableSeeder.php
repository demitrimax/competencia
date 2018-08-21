<?php

use Illuminate\Database\Seeder;
use App\motivadora;

class motivadorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $frases = [
          [
            'autor' => 'Desconocido',
            'frase' => 'Si quieres llegar a algún lugar tienes que saber a dónde quieres ir y cómo llegar ahí. Entonces nunca, nunca, nunca rendirse',
            'imagen' => '',
          ],
          [
            'autor' => 'Desconocido',
            'frase' => 'Fórmula del éxito: Levántate temprano, trabaja duro, encuentra “petróleo”',
            'imagen' => '',
          ],
          [
            'autor' => 'Desconocido',
            'frase' => 'Los pensamientos que elegimos tener son las herramientas que usamos para pintar el lienzo de nuestras vidas',
            'imagen' => '',
          ],
          [
            'autor' => 'Desconocido',
            'frase' => 'En la vida aprendes que a la única persona que puedes realmente corregir y cambiar es a ti mismo',
            'imagen' => '',
          ],
          [
            'autor' => 'Desconocido',
            'frase' => 'Si no haces que ocurran cosas entonces las cosas te ocurrirán a ti',
            'imagen' => '',
          ],
          [
            'autor' => 'Desconocido',
            'frase' => 'Olvida los errores del pasado. Olvida los fracasos. Olvídalo todo excepto aquello que vas a hacer ahora y hazlo',
            'imagen' => '',
          ],
          [
            'autor' => 'Desconocido',
            'frase' => 'Nadie está a salvo de las derrotas. Pero es mejor perder algunos combates en la lucha por nuestros sueños, que ser derrotado sin saber siquiera por qué se está luchando.',
            'imagen' => '',
          ],
          [
            'autor' => 'Desconocido',
            'frase' => 'Creo honestamente que es mucho mejor fallar en algo que amas que tener éxito en algo que odias',
            'imagen' => '',
          ],
        ];
        motivadora::insert($frases);
    }
}
