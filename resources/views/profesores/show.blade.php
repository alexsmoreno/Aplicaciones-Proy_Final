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
<a href="{{url('/profesor/create')}}" class="btn btn-success">Registrar Profesor</a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRES</th>
            <th>APELLDIOS</th>
            <th>ESPECIALIDAD</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Profesor as $profe)
        <tr>
        <td>{{$profe->id}}</td> 
        <td>{{$profe->user->name}}</td> 
        <td>{{$profe->user->last_name}}</td>
        <td>{{$profe->especialidad}}</td> 
        <td>
            <a href="{{url('/profesor/'.$profe->id.'/edit')}}" class="btn btn-primary">
                Editar
            </a>
         <form action="{{url('/profesor/'.$profe->id)}}" class="d-inline" method="post">
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
