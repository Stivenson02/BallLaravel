@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <form   action="{{route('create_materia_path')}}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="materia" placeholder="Materia:">
                    <input type="number" name="salon" placeholder="Salon:">
                    <button type="submit" class="submit-btn-1">Envíar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
