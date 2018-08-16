<?php

use Illuminate\Database\Seeder;
use App\tcompetencia;

class tcompetenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tcompetencia = [
          ['competencia' => 'CrossFit', 'nivel' => 'Principante', 'nombreclave' => 'CrossBeginer'],
          ['competencia' => 'CrossFit', 'nivel' => 'Intermedio', 'nombreclave' => 'CrossInter'],
          ['competencia' => 'CrossFit', 'nivel' => 'RX(Avanzado)', 'nombreclave' => 'CrossRX'],
          ['competencia' => 'Gymnastic', 'nivel' => 'Principiante', 'nombreclave' => 'GymBeginer'],
          ['competencia' => 'Gymnastic', 'nivel' => 'Intermedio', 'nombreclave' => 'GymInter'],
          ['competencia' => 'Gymnastic', 'nivel' => 'RX(Avanzado)', 'nombreclave' => 'GymRX'],
          ['competencia' => 'Weightlifting', 'nivel' => 'Prinpiante', 'nombreclave' => 'WeighBeginer'],
          ['competencia' => 'Weightlifting', 'nivel' => 'Intermedio', 'nombreclave' => 'WeighInter'],
          ['competencia' => 'Weightlifting', 'nivel' => 'Avanzado', 'nombreclave' => 'WeightRX'],
          ['competencia' => 'Condition', 'nivel' => 'Principante', 'nombreclave' => 'ConditBeginer'],
          ['competencia' => 'Condition', 'nivel' => 'Intermedio', 'nombreclave' => 'ConditInter'],
          ['competencia' => 'Condition', 'nivel' => '(RX)Avanzado', 'nombreclave' => 'ConditRX'],
          ['competencia' => 'Bajar de Peso', 'nivel' => 'Bajar de Peso', 'nombreclave' => 'LossWeight'],
        ];
        tcompetencia::insert($tcompetencia);
    }
}
