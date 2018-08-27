@extends('admin.layout')
@section('titulo','MaxEffortChallenge|Competidores')
@section('page-header','Lista de Competidores')
@section('header-scripts')
@endsection
@section('link-competidores','active')
@section('link-competidores-comp','active')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Listado de Competidores</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="competidores" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No.</th>
            <th>Nombre Completo</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Competencia</th>
            <th>Videos</th>
            <th>Opciones</th>
          </tr>
          </thead>
          <tbody>
          @foreach($competidores as $key => $competidor)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$competidor->nombre ." ". $competidor->apellidos}}</td>
            <td>{{$competidor->edad}}</td>
            <td>{{$competidor->genero}}</td>
            <td> {{$competidor->tcompetencia->competencia." | ".$competidor->tcompetencia->nivel }}</td>
            <td> {{$competidor->compvideos->count()}}</td>
            <td><a href="{{url('admin/competidor/'.$competidor->id.'/perfil')}}">Detalles</a>
              @if ($competidor->compvideos->count() > 0)
              | <a href="{{url('admin/competidor/'.$competidor->id.'/videos')}}"> Videos</a>
              @endif
              | Mensajes </td>
          </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>No.</th>
            <th>Nombre Completo</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Competencia</th>
            <th>Videos</th>
            <th>Opciones</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>

  </div>
  <!-- /.col -->
</div>
@endsection
@section('scripts')
<!-- DataTables -->
<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#competidores').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection
