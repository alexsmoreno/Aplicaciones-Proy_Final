
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
<a href="{{url('/curso/create')}}" class="btn btn-success">Registrar Curso</a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>CODIGO</th>
            <th>NOMBRE CURSO</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Cursos as $curso)
        <tr>
        <td>{{$curso->id}}</td>
        <td>{{$curso->codigo}}</td> 
        <td>{{$curso->curso}}</td> 
        <td>
            <a href="{{url('/curso/'.$curso->id.'/edit')}}" class="btn btn-primary">
                Editar
            </a>
            
         <form action="{{url('/curso/'.$curso->id)}}" class="d-inline" method="post">
           @csrf
           {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar">
        </form>
         </td> 
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection