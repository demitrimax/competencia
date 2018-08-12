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
              <p>Para participar en la competencia tendrá que realizar un pago por <strong>$200.00 MXN</strong></p>
              <spam>Por favor registrese a continuación será redirigido a PayPal para realizar su pago.</spam>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container">

      <div class="row marginbot-80 centered-form">
        <div class="col-lg-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Registrese</div>
            <div id="sendmessage">Gracias por su registro!</div>
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif
            <form action="{{ url('/registro')}}" method="post" role="form" class="Form" id="registroform">
            {{ csrf_field() }}
            <div>
              <div class="form-group">
                <label for="tcompetencia">Tipo de Competencia</label>
                <select id="tcompetencia" name="tcompetencia" class="selectpicker">
                      <option value="">Seleccione una Competencia</option>
                  <?php $grupo = ""; ?>
                  @foreach($tcompetencia as $competencia)
                    <?php
                    if ($grupo <> $competencia->competencia) {
                      $grupo = "";
                    }
                    if ($grupo == "") {
                        $grupo = $competencia->competencia ?>
                        <optgroup label="{{$grupo}}">
                    <?php }  ?>                
                        <option value="{{$competencia->nombreclave}}">{{$competencia->nivel}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required value="{{old('nombre')}}"/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required value="{{old('apellidos')}}"/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" required value="{{ old('email') }}"/>
              <div class="validation"></div>
              <div id="campo_oculto" style="display:none;">El correo ya está en uso</div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirma contraseña" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="number" name="edad" class="form-control" id="edad" placeholder="Edad" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="{{ old('edad') }}"/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="date" name="fecnac" class="form-control" id="fecnac" placeholder="Fecha de Nacimiento" value="{{ old('fecnac') }}"/>
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono" required value="{{ old('telefono') }}"/>
              <div class="validation"></div>
            </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <label for="Genero">Genero</label>
                <div class="form-group" required>
                  <input type="radio" name="gender" value="H">Hombre<br>
                  <input type="radio" name="gender" value="M">Mujer<br>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6LcRMGYUAAAAAAMG4Zutozq-isqtGhcoIntJLzF1"></div>
                </div>
            </div>
            <div>
              <img src="https://www.paypalobjects.com/webstatic/es_MX/mktg/logos-buttons/redesign/btn_8.png" alt="PayPal" />
            </div>
              <input name="producto" value="Suscripcion Competencia MaxEffortChallenge 2018" hidden>
              <input name="precio" value=200.00 hidden>
            <div class="text-center"><button type="submit" class="btn btn-skin btn-lg btn-block" id="submit-button">Registrarse</button></div>
          </form>

          </div>
          <div class="panel panel-default">
              <div class="panel-heading">Importante!!!</div>
              Será redirigiado al Servidor PayPal en modo SandBox (pruebas)<br>
              cuentas de usuario para hacer los pagos: <br>
              usuario: runnermatrix@hotmail.com pass: runnermatrix <br>
              usuario: israel_hp@hotmail.com pass: israelgarcia
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
