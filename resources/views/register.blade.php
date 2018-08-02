@extends('layouts.app')
@section('head-script')
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
@section('content')
  <!-- Section: contact -->
  <section id="contact" class="home-section nopadd-bot color-dark bg-white text-center">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Resgistro</h2>
              <div class="divider-header"></div>
              <p>Para participar porfavor complete el registro.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container">

      <div class="row marginbot-80 centered-form">
        <div class="col-lg-8 col-md-offset-2">
          <div id="sendmessage">Gracias por su registro!</div>
          <div id="errormessage"></div>
          <form action="{{ url('/registro')}}" method="post" role="form" class="contactForm">
            {{ csrf_field() }}
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" required/>
              <div class="validation"></div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="confpassword" class="form-control" id="confpassword" placeholder="Confirma contraseña" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="number" name="edad" class="form-control" id="edad" placeholder="Edad" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="date" name="fecnac" class="form-control" id="fecnac" placeholder="Fecha de Nacimiento" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono"/>
              <div class="validation"></div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <label for="Clasificacion">Clasificacion</label>
                <select id="clasificacion" name="clasifica">
                  <option value="Principiante">Principante</option>
                  <option value="Intermedio">Intermedio</option>
                  <option value="RX">RX(Avanzado)</option>
                </select>
              </div>
            </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <label for="Genero">Genero</label>
                <div class="form-group">
                  <input type="radio" name="gender" value="hombre">Hombre<br>
                  <input type="radio" name="gender" value="mujer">Mujer<br>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6LcRMGYUAAAAAAMG4Zutozq-isqtGhcoIntJLzF1"></div>
                </div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-skin btn-lg btn-block">Registrarse</button></div>
          </form>
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
