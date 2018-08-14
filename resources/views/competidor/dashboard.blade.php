@extends('competidor.layout')
@section('main-class')
class="profile-page"
@endsection
@section('content')
<section class="section-profile-cover section-shaped my-0">
  <div class="shape shape-style-1 shape-primary shape-skew alpha-4">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</section>
  <section class="section section-skew">
    <div class="container">
      <div class="card card-profile shadow mt--300">
        <div class="px-4">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <a href="#" data-toggle="modal" data-target="#CambiaAvatar">
                  <?php
                  // si el usuario no tiene un avatar, entonces asignar uno por default
                  if (Auth::user()->avatar =="") {
                    if (Auth::user()->genero == "H") { $ngen = rand(1,3);}
                    if (Auth::user()->genero == "W") { $ngen = rand(4,6);}
                    $avatarimg = 'img/avatars/avatar_'.$ngen.'.png';
                    }
                    else {
                      $avatarimg = Auth::user()->avatar;
                    }
                   ?>
                  <img src="{{asset($avatarimg)}}" class="rounded-circle" height="200">
                </a>
              </div>
            </div>
            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
              <div class="card-profile-actions py-4 mt-lg-0">
                @if (Auth::user()->premium == 1)
                <a href="#" class="btn btn-sm btn-info mr-4" data-toggle="modal" data-target="#AgregarVideo"><i class="fa fa-youtube-play" aria-hidden="true"></i>
Sube tu Video</a>
                @endif
                <a href="#" class="btn btn-sm btn-default float-right">Mensajes</a>
              </div>
            </div>
            <div class="col-lg-4 order-lg-1">
              <div class="card-profile-stats d-flex justify-content-center">
                <div>
                  <span class="heading">0</span>
                  <span class="description">Videos</span>
                </div>
                <div>
                  <span class="heading">0</span>
                  <span class="description">Calificados</span>
                </div>
                <div>
                  <span class="heading">N/D</span>
                  <span class="description">Lugar</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-5">
            <h3>{{Auth::user()->nombre." ".Auth::user()->apellidos}}
              <span class="font-weight-light">,{{Auth::user()->edad}}</span>
            </h3>
            <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Tipo de Competencia: <strong>{{$competencia->competencia}}</strong> Nivel: <strong>{{$competencia->nivel}}</strong></div>
            <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Correo: {{Auth::user()->email}}</div>
            <div><i class="ni education_hat mr-2"></i>Tipo de Usuario:
              @if (Auth::user()->premium == 0)
                Estándar.
                <p class="text-warning">Porfavor realice su pago para acceder a las opciones premium.</p><br>
                  <button class="btn btn-1 btn-warning" type="button" data-toggle="modal" data-target="#RealizarPago">Realice su pago</button></div>
                @elseif  (Auth::user()->premium == 1)
                <button class="btn btn-1 btn-primary" type="button">Premium</button>
              @endif
            </div>
          </div>
          <div class="mt-5 py-5 border-top text-center">
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <p>Pequeña descripción o Bio del usuario</p>
                <a href="#">Mostrar más</a>
              </div>
            </div>
          </div>
          <div class="mt-5 py-5 border-top text-center">
            <div class="row justify-content-center">
            @foreach($videos as $video)
              <div class="col-lg-9">
                <div class="row">
                   <div class="col">
                     <span>
                       <?php
                          echo LaravelVideoEmbed::parse($video->videourl);
                        ?>
                       </span>
                   </div>
                   <div class="col">
                     <span>
                         <strong>Fecha de Carga</strong> {{$video->created_at}}
                      </span><br>

                   </div>
                 </div>

              </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal -->
  <div class="modal fade" id="CambiaAvatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form method="post" action="competidor/avatarimg" enctype="multipart/form-data" >
          {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Imagen Avatar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="{{asset($avatarimg)}}">
          Agrege o cambie la imagen de su avatar.
          <input type="file" name="avatarimg" class="form-control" accept="image/*">
          <input type="hidden" name="idcompetidor" value="{{ Auth::user()->id }}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

@if  (Auth::user()->premium == 0)
  <!-- Modal -->
  <div class="modal fade" id="RealizarPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form method="post" action="{{ url('/registro')}}" >
          {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos para su pago</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{Auth::user()->nombre}}, estos son los datos de su registro.<br>
          <strong>Nombre Completo:</strong> {{Auth::user()->nombre." ".Auth::user()->apellidos }}<br>
          <strong>Edad:</strong> {{Auth::user()->edad}}<br>
          <strong>Competencia:</strong> {{ Auth::user()->tcompetencia }} <br>
          <strong>Costo:</strong>$200.00<br>
          <input type="hidden" name="idcompetidor" value="{{ Auth::user()->id }}">
          <input type="hidden" name="nombre" value="{{ Auth::user()->nombre }}">
          <input type="hidden" name="apellidos" value="{{ Auth::user()->apellidos }}">
          <input type="hidden" name="fecnac" value="{{ Auth::user()->fecnac }}">
          <input type="hidden" name="telefono" value="{{ Auth::user()->telefono }}">
          <input type="hidden" name="edad" value="{{ Auth::user()->edad }}">
          <input type="hidden" name="email" value="{{ Auth::user()->email }}">
          <input type="hidden" name="password" value="{{ Auth::user()->password }}">

          <input type="hidden" name="segundavez" value="true">
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Pagar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  @endif

@if  (Auth::user()->premium == 1)
  <!-- Modal -->
  <div class="modal fade" id="AgregarVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form method="post" action="competidor/videoupload">
          {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subir Video</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Agregue el URL de su video.
          <div class="form-group">
            <input type="url" class="form-control" id="videourl" name="videourl" placeholder="youtube">
            <textarea class="form-control" id="comentariovideo" rows="3" name="comentario" placeholder="Escriba algun comentario del video (opcional)"></textarea>
            Seleccione la Clasificación a Calificar:<br>
            <select class="selectpicker" name="clasifica">
              <option>Amrar</option>
              <option>Fortime</option>
              <option>P.R.</option>
            </select>

          </div>
          <input type="hidden" name="tcompetencia" value="{{ $competencia->id }}">
          <input type="hidden" name="idcompetidor" value="{{ Auth::user()->id }}">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  @endif
@endsection
