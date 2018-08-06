<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('page-title', 'Max Effort Challenge')</title>

  <!-- css -->

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/nivo-lightbox.css" rel="stylesheet') }}" />
  <link href="{{ asset('css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" media="screen" />
  <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" media="screen" />
  <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('css/animate.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('color/default.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('leaflet/leaflet.css')}}" />
  @yield('head-script')

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  <!-- page loader -->
  <div id="page-loader">
    <div class="loader">
      <div class="spinner">
        <div class="spinner-container con1">
          <div class="circle1"></div>
          <div class="circle2"></div>
          <div class="circle3"></div>
          <div class="circle4"></div>
        </div>
        <div class="spinner-container con2">
          <div class="circle1"></div>
          <div class="circle2"></div>
          <div class="circle3"></div>
          <div class="circle4"></div>
        </div>
        <div class="spinner-container con3">
          <div class="circle1"></div>
          <div class="circle2"></div>
          <div class="circle3"></div>
          <div class="circle4"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page loader -->


  @yield('intro')


  <!-- Navigation -->
  <div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-2 mob-logo">
            <div class="row">
              <div class="site-logo">
                <a href="{{url('/')}}"><img src="{{asset('img/maxeffortchallenge.png')}}" alt="" /></a>
              </div>
            </div>
          </div>


          <div class="col-md-10 mob-menu">
            <div class="row">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="{{ url('/')}}">Principal</a></li>
                  <li><a href="#about">Tabla de Posiciones</a></li>
                  <li><a href="#service">Categorias</a></li>
                  <li><a href="#works">Estándar de Movimiento</a></li>
                  <li class="dropdown nav-toggle">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a class="external" href="#">Que es Max Effort Challenge</a></li>
                      <li><a class="external" href="{{ url('/registro') }}">Registrarse</a></li>
                      <li><a class="external" href="#">Historia</a></li>
                      <li><a class="external" href="#">Mas Retos</a></li>
                      <li><a class="external" href="#">Programaciones</a></li>
                      @auth
                          <li><a class="external" href=" {{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                      @else
                          <li><a href="{{ url('/admin') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                      @endauth
                    </ul>
                  </li>
                </ul>
              </div>
              <!-- /.Navbar-collapse -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </nav>
  </div>
  <!-- /Navigation -->

@yield('content')


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <div class="text-center">
            <a href="#intro" class="totop"><i class="pe-7s-angle-up pe-3x"></i></a>

            <div class="social-widget">


              <ul class="team-social">
                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
              </ul>

            </div>
            <p>&copy;Veritas Software. Todos los derechos reservados 2018</p>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Valera
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.sticky.js')}}"></script>
  <script src="{{asset('js/slippry.min.js')}}"></script>
  <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
  <script src="{{asset('js/morphext.min.js')}}"></script>
  <script src="{{asset('js/jquery.mb.YTPlayer.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/jquery.scrollTo.js')}}"></script>
  <script src="{{asset('js/jquery.appear.js')}}"></script>
  <script src="{{asset('js/stellar.js')}}"></script>
  <script src="{{asset('js/gmap.js')}}"></script>
  <script src="{{asset('js/wow.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/nivo-lightbox.min.js')}}"></script>
  <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  @yield('scripts')
  @yield('braintree-script')

</body>

</html>
