@extends('admin.layout')
@section('titulo','MaxEffortChallenge|Videos Competidor')
@section('page-header','Videos del Competidor')
@section('header-scripts')
@endsection
@section('link-competidores','active')
@section('content')
<div class="row">
  <div class="col-md-12">
    <!-- The time line -->
    <ul class="timeline">
      <!-- timeline time label -->
      @foreach ($videos as $video)
      <li class="time-label">
            <span class="bg-red">
              {{$video->created_at->format('d M Y')}}
            </span>
      </li>
      <!-- /.timeline-label -->
      <!-- timeline item -->
      <li>
        <i class="fa fa-video-camera bg-maroon"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i>{{$video->created_at->format('h:i')}}</span>

          <h3 class="timeline-header"><a href="#">{{$video->suscriptores->nombre." " . $video->suscriptores->apellidos}}</a> Subió un video</h3>

          <div class="timeline-body">

            {!! LaravelVideoEmbed::parse($video->videourl) !!}

          </div>
          <div class="timeline-footer">
            <a class="btn btn-primary btn-xs">Read more</a>
            <a class="btn btn-danger btn-xs">Delete</a>
          </div>
        </div>
      </li>
      @endforeach
      <!-- END timeline item -->
      <!-- timeline item -->

    </ul>
  </div>
  <!-- /.col -->
</div>

@endsection
@section('scripts')
@endsection
