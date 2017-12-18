@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Materia</div>

                <div class="panel-body">
                  <form   action="{{route('inscrip_materia_path')}}" method="post">
                    {{ csrf_field() }}
                    <select  name="clas_id">
                      @foreach($inscripcion as $inscrip)

                      <option value="{{$inscrip->id}}">{{$inscrip->materia}} Salon {{$inscrip->salon}}</option>

                      @endforeach
                    </select>

                    <button type="submit" class="submit-btn-1">Envíar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
