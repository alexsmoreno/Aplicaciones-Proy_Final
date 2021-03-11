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
<a href="{{url('/registro/create')}}" class="btn btn-success">Registrar Matricula</a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>PROFESOR</th>
            <th>ESPECIALIDAD</th>
            <th>NOMBRE ALUMNO</th>
            <th>APELLIDOS ALUMNO</th>
            <th>CURSO</th>
            <th>GRUPO</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $registro)
        <tr>
        <td>{{$registro->id}}</td>

            <td>{{$registro->profesorAsignado()}}</td>
            <td>{{$registro->profesorAsignado_e()}}</td>
        <td>{{$registro->alumno->NOMBRES}}</td>
        <td>{{$registro->alumno->APELLIDOS}}</td>
        <td>{{$registro->curso->curso}}</td>
        <td>{{$registro->grupo}}</td>
        <td>
         <form action="{{url('/registro/'.$registro->id)}}" class="d-inline" method="post">
           @csrf
           {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Borrar">
        </form>
         </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
