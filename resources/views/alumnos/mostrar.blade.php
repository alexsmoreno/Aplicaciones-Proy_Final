
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
<a href="{{url('/alumno/create')}}" class="btn btn-success">Registrae Alumno</a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>DNI</th>
            <th>APELLDIOS</th>
            <th>NOMBRES</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Alumnos as $alumno)
        <tr>
        <td class="active">{{$alumno->id}}</td> 
        <td>{{$alumno->DNI}}</td> 
        <td class="active">{{$alumno->APELLIDOS}}</td>
        <td>{{$alumno->NOMBRES}}</td> 
        <td class="active">
            <a href="{{url('/alumno/'.$alumno->id.'/edit')}}" class="btn btn-primary">
                Editar
            </a>
            
         <form action="{{url('/alumno/'.$alumno->id)}}" class="d-inline" method="post">
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