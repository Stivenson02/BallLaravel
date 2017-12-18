@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Materia</div>

                <div class="panel-body">
                  <form   action="{{route('edit_register_path')}}" method="post">
                    {{ csrf_field() }}
                    <select  name="clas_id">
                      @foreach($materias as $inscrip)
                      <option value="{{$inscrip->id}}">  @if( $inscrip->id == $actual) ACTUAL @endif{{$inscrip->materia}} Salon {{$inscrip->salon}}</option>
                      @endforeach
                    </select>
                    <input type="hidden" name="id_register" value="{{$id_register}}">
                    <button type="submit" class="submit-btn-1">Envíar</button>
                  </form>
                  <br>
                  <form class="" action="{{route('delet_register_path')}}" method="post">
                      {{ csrf_field() }}
                    <input type="hidden" name="id_register" value="{{$id_register}}">
                    <button type="submit" class="submit-btn-1">Eliminar este registro</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
