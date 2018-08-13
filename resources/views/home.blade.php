@extends('layouts.app')

@section('content')

<!-- Section: contact -->
<section id="contact" class="home-section nopadd-bot color-dark bg-white text-center">
  <div class="container marginbot-50">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
          <div class="section-heading text-center">
            <h2 class="h-bold">PANEL DE CONTROL</h2>
            <div class="divider-header"></div>
            <p>ESTAS SON LAS OPCIONES DE ADMINISTRADOR.</p>
            <button href="{{ url('/admin')}}" class="btn btn-skin">Panel de Administración</button>
          </div>

        </div>
      </div>
    </div>

  </div>


</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
