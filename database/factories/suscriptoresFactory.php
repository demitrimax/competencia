<?php

use Faker\Generator as Faker;
use App\suscriptores;

$factory->define(suscriptores::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->firstName,
        'apellidos' => $faker->lastName,
        'fecnac'=> $faker->date($format = 'Y-m-d', $max='now'),
        'edad' => $faker->numberBetween($min=18, $max=55),
        'genero' => $faker->randomElement($array = array ('H','M')),
        'telefono' => $faker->numerify('993#######'),
        //'tcompetencia' => $faker->randomElement($array = array ('CrossBeginer','CrossInter', 'CrossRX', 'GymBeginer','GymInter','GymRX','WeighBeginer','WeighInter','WeightRX','ConditBeginer','ConditInter','ConditRX','LossWeight')),
        'email' => $faker->safeEmail,
        'password'=>bcrypt('123456789'),
        'premium'=>$faker->numberBetween(0,1),
        'bio'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'tcompetencia_id' => $faker->randomElement($array = array(1,2,3,4,5,6,7,8,9,10,11,12,13)),
    ];
});
