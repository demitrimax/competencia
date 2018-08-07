@extends('layouts.app')

@section('intro')
  <!-- Section: home video -->
  <section id="intro" class="home-video text-light">
    <div class="home-video-wrapper">

      <div class="homevideo-container">
        <div id="P1" class="bg-player" style="display:block; margin: auto; background: rgba(0,0,0,0.5)" data-property="{videoURL:'https://www.youtube.com/watch?v=cEVzMu-ob7s&t=49',containment:'.homevideo-container', quality: 'hd720', showControls: false, autoPlay:true, mute:true, startAt:49, opacity:1}"></div>
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
@endsection

@section('content')
<!-- Section: about -->
<section id="about" class="home-section color-dark bg-white">
  <div class="container marginbot-50">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
          <div class="section-heading text-center">
            <h2 class="h-bold">Que es Max Effort Challenge</h2>
            <div class="divider-header"></div>
            <p>La competencia Max Effort Challenge incluye diferentes partes.</p>
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
  <div class="text-center">
    <div class="container">
    <div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="1s">
      <div class="margintop-30">
        <a href="{{ url('/registro') }}" class="btn btn-skin" id="btn-scroll">Resgistrate Aquí</a>
        <a href="{{ url('/iniciasesion') }}" class="btn btn-skin" id="btn-scroll">Inicia Sesión</a>
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
            <h2 class="h-bold">Entradas del Blog</h2>
            <div class="divider-header"></div>
            <p>Algunos articulos de interes.</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="text-center">
    <div class="container">

      <div class="row">
        @foreach($entradas as $entrada)
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon">
                <img src="{{ url('storage/'.$entrada->image) }}" alt="post image" class="image-responsive" style="width:150px;">
              </div>
              <div class="service-desc">
                <h5>{{$entrada->title}}</h5>
                <p>
                  {{$entrada->excerpt}}
                </p>
                <a href="{{ url('entrada/'.$entrada->id)}}" class="btn btn-skin">Articulo Completo</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

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
            @foreach ($motivador as $motivadora)
            <li>
              <blockquote>
                {{ $motivadora->frase }}
              </blockquote>
              <h4>{{ $motivadora->autor }}</h4>
            </li>
            @endforeach
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
  Click para abrir el mapa
  </a>
</div>
<a id="map-btn2" class="btn btn-skin btn-lg btn-noradius gmap-btn close-map-button btn-hide" href="#map" title="Close google map" data-toggle="tooltip" data-placement="top">
Prolongación de Mina #100, Colonia El Recreo Villahermoa, Tabasco
</a>

<!-- google map -->
<section id="map" class="close-map">
  <div id="mapid"></div>
</section>
<!-- /google map -->
@endsection
@section('scripts')
<!-- <script src="leaflet/leaflet.js"></script> -->
<script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
 integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
 crossorigin=""></script>

<script>
var mapalef = L.map('mapid').setView([51.505, -0.09], 13);
</script>
@endsection
