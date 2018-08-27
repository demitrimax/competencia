@extends('admin.layout')
@section('titulo','MaxEffortChallenge|Competidores')
@section('page-header','Perfil Competidor')
@section('header-scripts')
@endsection
@section('link-competidores','active')
@section('link-competidores-comp','active')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">{{$competidor->nombre." ".$competidor->apellidos}}</h3>
              <h5 class="widget-user-desc">{{$competidor->email}}</h5>
            </div>
            <div class="widget-user-image">
              <?php
              // si el usuario no tiene un avatar, entonces asignar uno por default
              if ($competidor->avatar =="") {
                if ($competidor->genero == "H") { $ngen = rand(1,3);}
                if ($competidor->genero == "M") { $ngen = rand(4,6);}
                $avatarimg = 'img/avatars/avatar_'.$ngen.'.png';
                }
                else {
                  $avatarimg = $competidor->avatar;
                }
               ?>
              <img class="img-circle" src="{{asset($avatarimg)}}" width="50" height="50" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">{{$competidor->compvideos->count()}}</h5>
                    <span class="description-text">VIDEOS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">{{$competidor->tcompetencia->competencia." | ".$competidor->tcompetencia->nivel}}</h5>
                    <span class="description-text">COMPETENCIA</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">0</h5>
                    <span class="description-text">LUGAR</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
      </div>
@endsection
@section('scripts')

@endsection
