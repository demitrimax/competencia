@extends('layouts.app')

@section('content')
  <!-- Section: contact -->
  <section id="contact" class="home-section nopadd-bot color-dark bg-white text-center">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Lo Sentimos!!</h2>
              <div class="divider-header"></div>
              <p>Lamentablemente hubo un problema con el pago.</p>
              <p>Aún así te enviaremos un correo eletronico al <strong>{{$suscriptor->email}} </strong> con un vínculo para que lo intentes nuevamente</p>
              <spam> Deberás recordar la contraseña que nos proporcionaste para poder iniciar sesión en la página.</spam><br>
            </div>

          </div>
        </div>
      </div>

    </div>


  </section>

@endsection
