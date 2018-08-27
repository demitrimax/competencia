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
      @foreach ($videos as $key=>$video)
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

          <h3 class="timeline-header"><a href="#">{{$video->suscriptores->nombre." " . $video->suscriptores->apellidos}}</a> Subió un video
            @if($video->clasifica == "AMRAR")<button class="btn bg-navy btn-xs">AMRAR</button>@endif
            @if($video->clasifica == "FORTIME")<button class="btn bg-orange btn-xs">FORTIME</button>@endif
            @if($video->clasifica == "P.R.")<button class="btn bg-purple btn-xs">P.R.</button>@endif
          </h3>

          <div class="timeline-body">
            <div class="row">
              <div class="col-md-6">
                {!! LaravelVideoEmbed::parse($video->videourl) !!}
              </div>
              <div class="col-md-6">
                  {{ $video->comentario }}
                  @if(($video->tiempo) or ($video->repeticiones) or ($video->peso))
                  <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Video Calificado!</h4>
                      Actualmente este video ya fue calificado, aún así ustede puede volver a calificarlo.<br>
                      {{$video->tiempo}} {{$video->repeticiones}} {{$video->peso}}
                  </div>
                  @endif
              </div>
            </div>
          <div>
          </div>
          <div class="timeline-footer">
            <a class="btn btn-primary btn-xs" href="{{url('admin/videos/'.$video->id.'/califica')}}">Calificar</a>
            <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger{{$key+1}}">Eliminar Video</a>
          </div>
        </div>
      </li>
      @endforeach
      <!-- END timeline item -->
      <!-- timeline item -->
@foreach ($videos as $key=>$modal)
      <div class="modal modal-danger fade" id="modal-danger{{$key+1}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Eliminar Video</h4>
              </div>
              <div class="modal-body">
                <p>Por favor escriba un comentario de la eliminación.</p>
                <p>Comentario:</p>
                <textarea id="coment_video" class="form-control">
                </textarea>
                <input type="hidden" name="idvideo" value="{{$modal->id}}">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Eliminar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    @endforeach
    </ul>
  </div>
  <!-- /.col -->
</div>

@endsection
@section('scripts')
@endsection
