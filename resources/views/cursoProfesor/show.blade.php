@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('mensaje')}}
   <button type="button" class="close" data-dismiss="alert" arial-label="Close"></button>
      <span aria-hidden="true">&times;</span>
    </div>
    @endif
    <a href="{{route('reporteFinal',$idProfesor)}}" class="btn btn-success">Reporte de Notas</a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>ESTUDIANTE</th>
            <th>CURSO</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $registro)
        <tr>
        <td class="active">{{$registro->id}}</td>
        <td class="active">{{$registro->alumno->NOMBRES." ".$registro->alumno->APELLIDOS}}</td>
        <td class="active">{{$registro->curso->curso}}</td>
        <td class="active">
            <form action="{{route('cursoProfesor.editar',$registro->alumno->id)}}" class="d-inline" method="post">
                @csrf
                <input type="hidden" name="idCursoprof" value="{{$registro->curso->id}}"  >
                 <input class="btn btn-danger" type="submit" value="CALIFICAR">
             </form>

         </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
