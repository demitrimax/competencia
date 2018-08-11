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
                <a href="#">
                  <img src="{{asset('argon/img/theme/team-4-800x800.jpg')}}" class="rounded-circle">
                </a>
              </div>
            </div>
            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
              <div class="card-profile-actions py-4 mt-lg-0">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
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
            <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{Auth::user()->tcompetencia}}</div>
            <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Correo: {{Auth::user()->email}}</div>
            <div><i class="ni education_hat mr-2"></i>Tipo de Usuario:
              @if (Auth::user()->premium == 0)
                Estándar.
                <div>Porfavor realice su pago para acceder a las opciones premium.</div>
                @elseif  (Auth::user()->premium == 0)
                Premium
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
        </div>
      </div>
    </div>
  </section>

@endsection
