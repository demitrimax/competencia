@extends('layouts.app')
@section('content')
<section id="contact" class="home-section nopadd-bot color-dark bg-white text-center">
  <div class="container marginbot-50">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
          <div class="section-heading text-center">
            <h2 class="h-bold">Inicie Sesión</h2>
            <div class="divider-header"></div>

            <spam>Iniciando sesión</spam>
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
                  <div class="card-header">Iniciar Sesión</div>

                  <div class="card-body">
                      <form method="POST" action="{{ url('login') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="email" class="col-sm-4 col-form-label text-md-right">Correo Eletronico</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña:</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                      <label class="form-check-label" for="remember">
                                          Recordar usuario
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Login
                                  </button>

                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      Olvidó su Contraseña
                                  </a>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
