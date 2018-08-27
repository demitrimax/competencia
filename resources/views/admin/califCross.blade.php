@extends('admin.layout')
@section('titulo','MaxEffortChallenge| CrossFit')
@section('page-header','CrossFit')
@section('header-scripts')
@endsection
@section('link-calif','active')
@section('link-calif-cross','active')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Principiante</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Intermedio</a></li>
              <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">(RX)Avanzado</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Competidores Calificados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Competidor</th>
                  <th>Progreso</th>
                  <th style="width: 40px">Lugar</th>
                </tr>
                @foreach($crossBeginner as $key=>$cross)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$cross->nombre." ".$cross->apellidos." | "}}</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Crossfit | Nivel Intermedio</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th style="width: 10px">#</th>
                        <th>Competidor</th>
                        <th>Progreso</th>
                        <th style="width: 40px">Lugar</th>
                      </tr>
                      @foreach($crossInter as $key=>$cross)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$cross->nombre." ".$cross->apellidos." | "}}</td>
                        <td>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                          </div>
                        </td>
                        <td><span class="badge bg-red">55%</span></td>
                      </tr>
                      @endforeach
                    </tbody></table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Crossfit | Nivel Intermedio</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th style="width: 10px">#</th>
                        <th>Competidor</th>
                        <th>Progreso</th>
                        <th style="width: 40px">Lugar</th>
                      </tr>
                      @foreach($crossRX as $key=>$cross)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$cross->nombre." ".$cross->apellidos." | "}}</td>
                        <td>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                          </div>
                        </td>
                        <td><span class="badge bg-red">55%</span></td>
                      </tr>
                      @endforeach
                    </tbody></table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

      </div>

@endsection
@section('scripts')
@endsection
