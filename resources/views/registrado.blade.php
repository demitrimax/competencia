@extends('layouts.app')

@section('content')
  <!-- Section: contact -->
  <section id="contact" class="home-section nopadd-bot color-dark bg-white text-center">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold">FELICIDADES!! {{ $suscriptor->nombre }}</h2>
              <div class="divider-header"></div>
              <p>Te acabas de suscribir correctamente a la competencia.</p>
              <p>En breves recibiras un correo eletronico confirmando tu suscripción.</p>
              <spam> Deberás recordar tu correo electronico {{$suscriptor->email}} y la contraseña que nos proporcionaste para poder iniciar sesión en la página.</spam><br>
              <button href="{{ url('competidor/login')}}" class="btn btn-skin">Iniciar Sesión</button>
            </div>

          </div>
        </div>
      </div>

    </div>


  </section>
  <!-- /Section: contact -->
  <!-- Section: parallax 3 -->
  <section id="parallax3" class="home-section parallax text-light text-center" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row appear stats" id="wrapper">
        <div class="testimonialslide clearfix flexslider">
          <ul class="slides">
            <li>
              <blockquote>
                <strong>Iniciamos el 10 de Octubre 2018, Faltan: </strong>
              </blockquote>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="pe-7s-coffee pe-5x"></i>
            </div>
            <strong id="dias" class="number"></strong><br />
            <span class="text">Días</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="pe-7s-music pe-5x"></i>
            </div>
            <strong id="horas" class="number"></strong><br />
            <span class="text">Horas</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="pe-7s-coffee pe-5x"></i>
            </div>
            <strong id="minutos" class="number"></strong><br />
            <span class="text">Minutos</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="pe-7s-cup pe-5x"></i>
            </div>
            <strong id="segundos" class="number">10</strong><br />
            <span class="text">Segundos</span>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <script src="js/jquery.countdown.js"></script>

  <script>
  //countdown
$(document).ready(function(){
  //console.log('Hola');
  $('#wrapper').countdown('2018/10/10', function(event) {
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });
});
  </script>
@endsection
