@extends('admin.layout')
@section('titulo','MaxEffortChallenge | Lista de Videos')
@section('page-header','Lista de Videos')
@section('header-scripts')
@endsection
@section('link-competidores','active')
@section('link-competidores-videos','active')
@section('content')
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Porfavor califique los videos:</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>No.</th>
                  <th>Competidor</th>
                  <th>Competencia</th>
                  <th>Fecha</th>
                  <th>Clasificación</th>
                  <th>Comentario</th>
                  <th>Estatus</th>
                </tr>
                @foreach($videos as $key=>$video)
                <tr>
                  <td>{{$key+1}}</td>
                  <td><a href="{{url('admin/videos/'.$video->id.'/califica')}}">{{$video->suscriptores->nombre}}</a></td>
                  <td>{{$video->tcompetencia->competencia}}</td>
                  <td>{{$video->created_at->format('d M Y')}}</td>
                  <td>{{strtoupper($video->clasifica)}}</td>
                  <td>{{$video->comentario}}</td>
                  <td><a href="{{url('admin/videos/'.$video->id.'/califica')}}"><span class="label label-warning">Pendiente</span></a></td>
                </tr>
                @endforeach
              </tbody></table>
              {{ $videos->links() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

@endsection
@section('scripts')
@endsection
