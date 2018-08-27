@extends('admin.layout')
@section('titulo','MaxEffortChallenge|Dashboard')
@section('page-header','Dashboard')
@section('link-dash','active')
@section('content')
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$totalsuscriptores}}</h3>

              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Más info<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$porcentajeaceptacion}}<sup style="font-size: 20px">%</sup></h3>

              <p>Porcentaje de Aceptación</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$premium}}</h3>

              <p>Usuarios Premium</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$videos}}</h3>

              <p>Videos por Calificar</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{url('admin/videos')}}" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-light-blue">
            <span class="info-box-icon"><i class="fa fa-bolt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CrossFit</span>
              <span class="info-box-number">{{$crossfit}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$porcCross}}%"></div>
              </div>
              <span class="progress-description">
                    {{$porcCross}}% del total
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-heartbeat"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Gymnastic</span>
              <span class="info-box-number">{{$gymnastic}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$porcGym}}%"></div>
              </div>
              <span class="progress-description">
                    {{$porcGym}}% del total.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-navy">
            <span class="info-box-icon"><i class="fa fa-cogs"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">WeightLifthing</span>
              <span class="info-box-number">{{$weight}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$porcWeight}}%"></div>
              </div>
              <span class="progress-description">
                    {{$porcWeight}}% del total.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-hand-rock-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Condition</span>
              <span class="info-box-number">{{$condition}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$porcCondition}}%"></div>
              </div>
              <span class="progress-description">
                    {{$porcCondition}}% del total.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>

          <div class="info-box bg-orange">
            <span class="info-box-icon"><i class="fa fa-user-md"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Perder Peso</span>
              <span class="info-box-number">{{$perderpeso}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$porcPerderpeso}}%"></div>
              </div>
              <span class="progress-description">
                    {{$porcPerderpeso}}% del total.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>

        </div>
@endsection
@section('scripts')
<script src="{{asset('adminlte/bower_components/chart.js/Chart.js')}}"></script>
@endsection
