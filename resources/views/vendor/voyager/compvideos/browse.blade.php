@extends('voyager::master')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="icon class"></i> Videos a Calificar
        </h1>

    </div>
@stop

@section('content')
<div class="page-content browse container-fluid">
    @include('voyager::alerts')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">
                  <div class="table-responsive">
                      <table id="dataTable" class="table table-hover">
                          <thead>
                              <tr>
                                  <th>No.</th>
                                  <th>Competidor</th>
                                  <th>Competencia</th>
                                  <th>Clasificación</th>
                                  <th>Calificador</th>
                              </tr>
                          </thead>
                          <tbody>

                            @foreach($allvideos as $key => $video)
                              <tr>
                                      <td>{{$key+1}}</td>
                                      <td><a href="#">{{$video->suscriptores->nombre." ". $video->suscriptores->apellidos}}<a></td>
                                      <td>{{$video->tcompetencia->competencia."-".$video->tcompetencia->nivel}}</td>
                                      <td>{{$video->clasifica}}</td>
                                      <td>7.5</td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('css')

<link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">

@stop

@section('javascript')
    <!-- DataTables -->

        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    <script>
        $(document).ready(function () {

                var table = $('#dataTable').DataTable({!! json_encode(
                    array_merge([
                        "order" => [],
                        "language" => __('voyager::datatable'),
                        "columnDefs" => [['targets' => -1, 'searchable' =>  false, 'orderable' => false]],
                    ],
                    config('voyager.dashboard.data_tables', []))
                , true) !!});



            $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked'));
            });
        });


    </script>
@stop
