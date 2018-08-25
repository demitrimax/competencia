<?php

use Faker\Generator as Faker;
use App\compvideos;


$factory->define(compvideos::class, function (Faker $faker) {
  $VideosURL = array('https://www.youtube.com/watch?v=cLIHCbRL4us',
  'https://www.youtube.com/watch?v=YJO8Hrc0S_k',
  'https://www.youtube.com/watch?v=CVHnKnwaohc',
  'https://www.youtube.com/watch?v=Hg8Fa_EUQqY',
  'https://www.youtube.com/watch?v=kY7HcUACs58',
  'https://www.youtube.com/watch?v=6oIj4lb9cfM',
  'https://www.youtube.com/watch?v=PsO6ZnUZI0g',
  'https://www.youtube.com/watch?v=fV4DiAyExN0',
  'https://www.youtube.com/watch?v=f2s68HNBbys',
  'https://www.youtube.com/watch?v=rCqSDQMuKPI',
  'https://www.youtube.com/watch?v=cyheJ480LYA',
  'https://www.youtube.com/watch?v=u4SuniaLk-o',
  'https://www.youtube.com/watch?v=DPpJBCHLZrA',
  'https://www.youtube.com/watch?v=aGN3CJ40XCU',
  'https://www.youtube.com/watch?v=rbznA2BgknY',
  'https://www.youtube.com/watch?v=v64T_lsvU5E',
  'https://www.youtube.com/watch?v=GWTBKWA3ztk',
  'https://www.youtube.com/watch?v=eliIqrY9hZA',
  'https://www.youtube.com/watch?v=najtj-YhxNE',
  'https://www.youtube.com/watch?v=zgcmfAlpj3A',
  'https://www.youtube.com/watch?v=kwyMrRvXGis',
  'https://www.youtube.com/watch?v=mS1uElTYS-Y',
  'https://www.youtube.com/watch?v=tTd3MoxaxEo',
  'https://www.youtube.com/watch?v=xHPd8VEiYQs',
  'https://www.youtube.com/watch?v=zlKC6TSCC_A',
  'https://www.youtube.com/watch?v=UoYJ6reKIL8',
  'https://www.youtube.com/watch?v=czN1LfKO69s',
  'https://www.youtube.com/watch?v=b9AHzHHMfwY',
  'https://www.youtube.com/watch?v=Tz7ZIh-Bs9Y',
  'https://www.youtube.com/watch?v=aYk8yj0ExzU',
  'https://www.youtube.com/watch?v=3MkBsmxPa1E',
  'https://www.youtube.com/watch?v=NJMWETuxVic',
  'https://www.youtube.com/watch?v=iUMuISMeLrQ',
  'https://www.youtube.com/watch?v=luVCFyytVTE',
  'https://www.youtube.com/watch?v=PP4dzv-51v0',
  'https://www.youtube.com/watch?v=XSmyOvvXvNk',
  'https://www.youtube.com/watch?v=jai9sDJR33Q');
    return [
        //
        'suscriptor_id' => $faker->numberBetween(1,100),
        'videourl' => $faker->randomElement($VideosURL),
        'tcompetencia_id' => $faker->numberBetween(1,13),
        //'tiempo' => ,
        //'repeticiones' => ,
        //'peso' => ,
        'comentario' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
