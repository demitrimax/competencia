@extends('layouts.app')
@section('page-title')
{{ $entradablog->title }}
@endsection
@section('content')
<section id="about" class="home-section color-dark bg-white">
  <div class="container marginbot-50">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
          <div class="section-heading text-center">
            <h2 class="h-bold">{{ $entradablog->title }}</h2>
            <div class="divider-header"></div>
            <p>{{$entradablog->excerpt}}</p>
          </div>
        </div>
      </div>
    </div>
    <img src="{{ url('storage/'.$entradablog->image)}}" class="image-responsive">
  </div>
</section>
<section>
  <div class="container marginbot-50">
        <div class="row">
      {!! $entradablog->body !!}
    </div>
</diV>
</section>
@endsection
