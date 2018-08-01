<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Max Effort Challenge</title>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">
  <link rel="stylesheet" href="leaflet/leaflet.css" />



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

  <!-- Section: home video -->
  <section id="intro" class="home-video text-light">
    <div class="home-video-wrapper">

      <div class="homevideo-container">
        <div id="P1" class="bg-player" style="display:block; margin: auto; background: rgba(0,0,0,0.5)" data-property="{videoURL:'https://www.youtube.com/watch?v=cEVzMu-ob7s&t=49',containment:'.homevideo-container', quality: 'hd720', showControls: false, autoPlay:true, mute:true, startAt:0, opacity:1}"></div>
      </div>
      <div class="overlay">
        <div class="text-center video-caption">
          <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.8s">
            <h1 class="big-heading font-light"><span id="js-rotating">Maxx Effort Challenge, La competencia CrossFit, Tu mejor tiempo, Suscribete </span></h1>
          </div>
          <div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="1s">
            <div class="margintop-30">
              <a href="#about" class="btn btn-skin" id="btn-scroll">Empieza Aquí</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: intro -->


  <!-- Navigation -->
  <div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-2 mob-logo">
            <div class="row">
              <div class="site-logo">
                <a href="index.html"><img src="img/maxeffortchallenge.png" alt="" /></a>
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
                  <li class="active"><a href="#intro">Principal</a></li>
                  <li><a href="#about">Tabla de Posiciones</a></li>
                  <li><a href="#service">Categorias</a></li>
                  <li><a href="#works">Estándar de Movimiento</a></li>
                  <li class="dropdown nav-toggle">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a class="external" href="#">Que es Max Effort Challenge</a></li>
                      <li><a class="external" href="#">Registrarse</a></li>
                      <li><a class="external" href="#">Historia</a></li>
                      <li><a class="external" href="#">Mas Retos</a></li>
                      <li><a class="external" href="#">Programaciones</a></li>
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

  <!-- Section: about -->
  <section id="about" class="home-section color-dark bg-white">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Que es Max Effort Challenge</h2>
              <div class="divider-header"></div>
              <p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="text-center">
      <div class="container">


        <div class="row">
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.2s">
              <div class="team-wrapper-overlay">
                <h5>Gymnastics</h5>
                <p>Mejorar el rendimiento en gymnastics trabajando los diferentes movimientos (Pull ups, Muscle ups, Pistols, Handstand Walk, Rope Climb, etc.).</p>

              </div>
              <img src="img/parallax/primera_1.png" alt="" />
            </div>
          </div>

          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.5s">
              <div class="team-wrapper-overlay">
                <h5>Weightlifting</h5>
                <p>Incremento de fuerza y técnica en levantamientos olímpicos y de powerlifting (Snatch, Clean & Jerk, Squats, Press.)</p>
              </div>
              <img src="img/parallax/segunda_2.png" alt="" />
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.8s">
              <div class="team-wrapper-overlay">
                <h5>Metcon</h5>
                <p>Mejorar rendimiento cardiovascular con diferentes movimientos funcionales.</p>
              </div>
              <img src="img/parallax/tercera_3.png" alt="" />
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- /Section: about -->

  <!-- Section: parallax 1 -->
  <section id="parallax1" class="home-section parallax text-light" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h2 class="big-heading highlight-dark wow bounceInDown" data-wow-delay="0.2s">Entrenamiento sin limites!</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: services -->
  <section id="service" class="home-section color-dark bg-white">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Services</h2>
              <div class="divider-header"></div>
              <p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="text-center">
      <div class="container">

        <div class="row">
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="wow fadeInLeft" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="pe-7s-monitor pe-5x"></span>
                </div>
                <div class="service-desc">
                  <h5>Web Design</h5>
                  <p>
                    Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
                  </p>
                  <a href="#" class="btn btn-skin">Learn more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="pe-7s-camera pe-5x"></span>
                </div>
                <div class="service-desc">
                  <h5>Photography</h5>
                  <p>
                    Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
                  </p>
                  <a href="#" class="btn btn-skin">Learn more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="pe-7s-note pe-5x"></span>
                </div>
                <div class="service-desc">
                  <h5>Graphic design</h5>
                  <p>
                    Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
                  </p>
                  <a href="#" class="btn btn-skin">Learn more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="pe-7s-phone pe-5x"></span>
                </div>
                <div class="service-desc">
                  <h5>Mobile apps</h5>
                  <p>
                    Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
                  </p>
                  <a href="#" class="btn btn-skin">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: services -->

  <!-- Section: parallax 2 -->
  <section id="parallax2" class="home-section parallax text-light" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row appear stats">
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="pe-7s-stopwatch pe-5x"></i>
            </div>
            <strong id="counter-coffee" class="number">1142</strong><br />
            <span class="text">Minutes</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="pe-7s-music pe-5x"></i>
            </div>
            <strong id="counter-music" class="number">229</strong><br />
            <span class="text">Tracks</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="pe-7s-coffee pe-5x"></i>
            </div>
            <strong id="counter-clock" class="number">451</strong><br />
            <span class="text">Cokes</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="pe-7s-cup pe-5x"></i>
            </div>
            <strong id="counter-heart" class="number">112</strong><br />
            <span class="text">Awwards</span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Section: works -->
  <section id="works" class="home-section color-dark text-center bg-white">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Portfolio</h2>
              <div class="divider-header"></div>
              <p>Lorem ipsum dolor sit amet, agam perfecto sensibus usu at duo ut iriure.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="wow bounceInUp" data-wow-delay="0.4s">
            <div id="owl-works" class="owl-carousel">
              <div class="item"><a href="img/works/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/works/1.jpg" class="img-responsive" alt="img"></a></div>
              <div class="item"><a href="img/works/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/works/2.jpg" class="img-responsive " alt="img"></a></div>
              <div class="item"><a href="img/works/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/works/3.jpg" class="img-responsive " alt="img"></a></div>
              <div class="item"><a href="img/works/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/works/4.jpg" class="img-responsive " alt="img"></a></div>
              <div class="item"><a href="img/works/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="img/works/5.jpg" class="img-responsive " alt="img"></a></div>
              <div class="item"><a href="img/works/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="img/works/6.jpg" class="img-responsive " alt="img"></a></div>
              <div class="item"><a href="img/works/7.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/7@2x.jpg"><img src="img/works/7.jpg" class="img-responsive " alt="img"></a></div>
              <div class="item"><a href="img/works/8.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/8@2x.jpg"><img src="img/works/8.jpg" class="img-responsive " alt="img"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /Section: works -->

  <!-- Section: parallax 3 -->
  <section id="parallax3" class="home-section parallax text-light text-center" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonialslide clearfix flexslider">
            <ul class="slides">
              <li>
                <blockquote>
                  Usu ei porro deleniti similique, per no consetetur necessitatibus. Ut sed augue docendi alienum, ex oblique scaevola inciderint pri, unum movet cu cum. Et cum impedit epicuri
                </blockquote>
                <h4>Daniel Dan <span>&#8213; MA System</span></h4>
              </li>
              <li>
                <blockquote>
                  Usu ei porro deleniti similique, per no consetetur necessitatibus. Ut sed augue docendi alienum, ex oblique scaevola inciderint pri, unum movet cu cum. Et cum impedit epicuri
                </blockquote>
                <h4>Mark Wellbeck <span>&#8213; AC Software </span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Section: contact -->

  <!-- /Section: contact -->

  <!-- google map -->
  <div id="map-btn1-div">
    <a id="map-btn1" class="gmap-btn close-map-button btn-show" href="#map">
		Click here to open the map
		</a>
  </div>
  <a id="map-btn2" class="btn btn-skin btn-lg btn-noradius gmap-btn close-map-button btn-hide" href="#map" title="Close google map" data-toggle="tooltip" data-placement="top">
	Prolongación de Mina #100, Colonia El Recreo Villahermoa, Tabasco
	</a>

  <!-- google map -->
  <section id="map" class="close-map">
    <div id="mapados"></div>
  </section>
  <!-- /google map -->


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
            <p>&copy;Valera Theme. All Rights Reserved</p>
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
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/slippry.min.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
  <script src="js/morphext.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/gmap.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="leaflet/leaflet.js"></script>

  <script>
  var mapalef = L.map('mapados').setView([51.505, -0.09], 13);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(mapalef);

      L.marker([51.5, -0.09]).addTo(mapalef)
          .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
          .openPopup();
  </script>

</body>

</html>
