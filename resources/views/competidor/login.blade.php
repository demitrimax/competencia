<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Panel de Administración del Usuario">
  <meta name="author" content="Creative Tim">
  <title>Iniciar Sesión | MaxEffortChallenge</title>
  <!-- Favicon -->
  <link href="{{asset('argon/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('argon/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{asset('argon/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset('argon/css/argon.css?v=1.0.0')}}" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="{{asset('argon/css/docs.min.css')}}" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="{{url('/')}}">
          <img src="{{asset('img/maxeffortchallenge_white.png')}}">
        </a>
        <div class="navbar-collapse collapse" id="navbar_global">
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.facebook.com/" target="_blank" data-toggle="tooltip" title="Like en Facebook">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.instagram.com/" target="_blank" data-toggle="tooltip" title="Siguenos en Instagram">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://twitter.com/" target="_blank" data-toggle="tooltip" title="Siguenos en Twitter">
                <i class="fa fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="section section-shaped section-lg my-0">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <div class="text-center">
                  <img src="{{asset('img/maxeffortchallenge.png')}}" class="centered">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Inicie Sesión</small>
                </div>
                <form role="form" method="post" action="{{ route('competidor.login.submit') }}">
                    @csrf
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" type="email" id="inputEmail" name="email" required autofocus>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" type="password" required>
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span>Recordarme</span>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Iniciar Sesión</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <a href="{{ route('password.request') }}" class="text-light">
                  <small>OLVIDO SU CONTRASEÑA?</small>
                </a>
              </div>
              <div class="col-6 text-right">
                <a href="{{url('/registro')}}" class="text-light">
                  <small>Crear una nueva cuenta</small>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Core -->
  <script src="{{asset('argon/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('argon/vendor/popper/popper.min.js')}}"></script>
  <script src="{{asset('argon/vendor/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('argon/vendor/headroom/headroom.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('argon/js/argon.js?v=1.0.0')}}"></script>
</body>

</html>
