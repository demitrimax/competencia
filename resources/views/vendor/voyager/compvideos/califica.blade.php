@extends('voyager::master')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="icon class"></i> Visualizar y Calificar
        </h1>

    </div>
@stop

@section('content')
<?php
   echo LaravelVideoEmbed::parse($vid->videourl);
 ?>
 <br>
Se califica  {{$vid->clasifica}} <br>
<form method="post">
Introduzca Calificación:
  @if($vid->clasifica=="Amrar")
    <input type="number" name="repeticiones"> Repeticiones
  @endif
  @if($vid->clasifica=="Fortime")
    <input type="text" name="tiempo"> Tiempo
  @endif
  @if($vid->clasifica=="P.R.")
    <input type="text" name="peso"> Peso
  @endif
  <button type="submit" value="Calificar" class="form-control">Calificar</button>
</form>
@endsection

@section('css')

<link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">

@stop

@section('javascript')
@stop
