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
  </section>
  <div class="container">

    <form class="well form-horizontal" action="{{ url('/registro')}}" method="post"  id="registroform">
      {{ csrf_field() }}
      <div class="panel panel-default">
          <div class="panel-heading">Formulario de Registro</div>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif
<fieldset>

<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">Tipo de Competencia</label>
  <div class="col-md-4 selectContainer">
  <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
  <select name="tcompetencia" class="form-control selectpicker">
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
  </select>
</div>
</div>
</div>
<!--dtos-->
<div class="form-group">
  <label class="col-md-4 control-label">Nombre (s)</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nombre" id="nombre" placeholder="Nombre" class="form-control"  type="text" required value="{{old('nombre')}}"/>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Apellidos</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="apellidos" id="apellidos" placeholder="Apellidos" class="form-control"  type="text" required value="{{old('apellidos')}}">
    </div>
  </div>
</div>



<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Correo Electrónico</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input  name="email" id="email" placeholder="Correo Electrónico" class="form-control"  type="email" required value="{{ old('email') }}">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Contraseña</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password" placeholder="Conraseña" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirme Contraseña</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password_confirmation" placeholder="Confirme Contraseña" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Edad</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-hand-up"></i></span>
  <input name="edad" placeholder="Edad" class="form-control"  type="number" value="{{ old('edad') }}" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Fecha de Nacimiento</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="fecnac" id="fecnac" class="form-control" type="date" value="{{ old('fecnac') }}" required>
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">No. Teléfono</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="telefono" id="telefono" placeholder="(993)" class="form-control" type="text" value="{{ old('telefono') }}" required/>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Género</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"></span>
        <input type="radio" name="gender" value="H">Hombre<br>
        <input type="radio" name="gender" value="M">Mujer<br>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Video URL</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
  <input name="videourl" class="form-control" type="text" value="{{ old('videourl') }}">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <div class="g-recaptcha" data-sitekey="6LcRMGYUAAAAAAMG4Zutozq-isqtGhcoIntJLzF1"></div>
    </div>
  </div>
</div>
<!-- Select Basic -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
<button type="submit" class="btn btn-warning btn-block" > REGISTRARSE <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
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
<!-- /.container -->

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
