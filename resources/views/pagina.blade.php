@extends('layouts.app')
@section('page-title')
{{ $lapagina->title }} | Max Effort Challenge
@endsection
@section('content')
<section id="about" class="home-section color-dark bg-white">
  <div class="container marginbot-50">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
          <div class="section-heading text-center">
            <h2 class="h-bold">{{ $lapagina->title }}</h2>
            <div class="divider-header"></div>
            <p>{{$lapagina->excerpt}}</p>
          </div>
        </div>
      </div>
    </div>
    @if($lapagina->image ==!null)
    <img src="{{ url('storage/'.$lapagina->image)}}" class="image-responsive centered">
  @endif
  </div>
</section>
<section>
  <div class="container marginbot-50">
        <div class="row">
      {!! $lapagina->body !!}
    </div>
</diV>
</section>
@endsection
