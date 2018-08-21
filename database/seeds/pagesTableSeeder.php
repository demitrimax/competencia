<?php

use Illuminate\Database\Seeder;
use App\pages;

class pagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $paginas = [
          [
            'author_id' => 1,
            'title' => 'Hello Word',
            'excerp' => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
            'body' => '<p>Hello World. Scallywag grog swab Cat onine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
            'image' => '',
            'slug' => 'hello-world',
            'meta-description' => 'Yar Meta Description',
            'meta-keywords' => 'Keyword1, Keyword2',
            'status' => 'ACTIVE',
          ],
          [
            'author_id' => 1,
            'title' => 'Historia',
            'excerp' => 'Nuestra Historia',
            'body' => '<h1>&nbsp;</h1>
<table style="height: 83px; background-color: black; margin-left: auto; margin-right: auto;" width="1479">
<tbody>
<tr>
<td style="width: 1469px;">
<h1 style="text-align: center;"><span style="color: #ffcc00;">Historia de Max Effort Challenge</span></h1>
</td>
</tr>
</tbody>
</table>
<h1>&nbsp;</h1>
<p>&nbsp;</p>
<p><strong>Todos en alg&uacute;n momento de nuestra vida hemos competido, desde ni&ntilde;os compet&iacute;amos en quien ten&iacute;a m&aacute;s juguetes, en un partido de f&uacute;tbol, en un partido de&nbsp;</strong><strong><span style="font-size: 10.5pt; line-height: 107%; font-family: Verdana, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">volibol</span></strong><strong>&nbsp;en la playa, el mejor castillo, y gracias a eso logramos sacar lo mejor de nosotros, sin la necesidad de ganar un premio, simplemente quer&iacute;amos demostrar que s&iacute; pod&iacute;amos, que no nos rendir&iacute;amos y d&aacute;bamos nuestro mayor esfuerzo.</strong></p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://maxeffortchallenge.com/storage/pages/August2018/Imagen1.png" alt="La motivaci&oacute;n nuestro motor" width="576" height="384" />&nbsp; &nbsp;&nbsp;</p>
<p><strong>Creo que la competencia logra sacar de nosotros a&uacute;n lo que no imagin&aacute;bamos que pod&iacute;amos lograr, es por eso que iniciamos estos retos con el fin de sacar lo mejor de nosotros en cada competencia.</strong></p>
<h2><span style="background-color: #000000; color: #ffcc00;">Motivaci&oacute;n</span></h2>
<p><strong>Una de las razones de que las persona hoy se no permanecen es por falta de motivaci&oacute;n. Algo que debes preguntarte siempre es, cual es</strong></p>
<p><strong>tu motivaci&oacute;n en lo que haces, que es lo que te impulsa, hemos observado gente que va y viene en un gimnasio o box, y sabemos una de las razones, es por que no ten&iacute;an una motivaci&oacute;n clara.</strong></p>
<p><strong>Queremos que cada persona que entrenan ya sea por gusto, por salud, por distracci&oacute;n cual sea su motivo, tengan una motivaci&oacute;n atraves de poner a prueba su estado f&iacute;sico en nuestras competencias, llev&aacute;ndote a dar tu m&aacute;ximo esfuerzo.&nbsp;</strong></p>',
            'image' => '',
            'slug' => 'historia',
            'meta-description' => 'Historia',
            'meta-keywords' => 'Historia',
            'status' => 'ACTIVE',
          ],
        ];
        pages::insert($paginas);
    }
}
