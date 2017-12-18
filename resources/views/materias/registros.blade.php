@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Registros de estudiantes</div>

        <div class="panel-body">
          @foreach($registros as $regis)

          <div class="col-md-6">
            <div class="">
              <strong>Estudiante: {{$regis->name}}</strong><br>
              <strong>Materia: {{$regis->materia}}</strong>
              <a href="{{route('show_register_path', $regis->id)}}">Editar Registro</a>
              <hr>
            </div>
          </div>

          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
