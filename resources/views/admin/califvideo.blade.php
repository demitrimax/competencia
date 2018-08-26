@extends('admin.layout')
@section('titulo','MaxEffortChallenge | Calificación')
@section('page-header','Califique el Video')
@section('header-scripts')
@endsection
@section('link-competidores','active')
@section('content')
<div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
                <span class="username"><a href="#">{{$elvideo->suscriptores->nombre}}</a></span>
                <span class="description">{{$elvideo->tcompetencia->competencia}} | {{$elvideo->tcompetencia->nivel}} - 7:30 PM Today</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-sm-4 col-md-4">
                                    {!! LaravelVideoEmbed::parse($elvideo->videourl) !!}
                </div>
                <div class="col-sm-4 col-md-4">
                    <p>{{$elvideo->comentario}}</p>
                    Se califica  <strong>{{$elvideo->tcompetencia->competencia}} | {{$elvideo->tcompetencia->nivel}} | {{$elvideo->clasifica}}<strong> <br>
                    <form method="post" action="{{url('admin/video/califica')}}">
                      {{ csrf_field() }}
                    Introduzca Calificación:
                      <input type="hidden" name="videoid" value="{{$elvideo->id}}">
                      @if($elvideo->clasifica=="AMRAR")
                        <input type="number" name="repeticiones" value="{{ $elvideo->repeticiones }}" required> Repeticiones
                      @endif
                      @if($elvideo->clasifica=="FORTIME")
                        <input type="time" name="tiempo" step="1" value="{{ $elvideo->tiempo }}" required> Tiempo
                      @endif
                      @if($elvideo->clasifica=="P.R.")
                        <input type="text" name="peso" value ="{{ $elvideo->peso }}" required> Peso
                      @endif
                      <button type="submit" value="Calificar" class="form-control">Calificar</button>
                    </form>
                </div>
              </div>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted">127 likes - 3 comments</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="{{asset('adminlte/dist/img/user3-128x128.jpg')}}" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
              <!-- /.box-comment -->
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="{{asset(Auth::user()->avatar)}}" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
@endsection
@section('scripts')
@endsection
