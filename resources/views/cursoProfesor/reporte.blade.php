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
   
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>AÑO</th>
            <th>MES</th>
            <th>DOCENTE</th>
            <th>GRUPO</th>
            <th>ESTUDIANTE</th>
            <th>1° BIMESTRE</th>
            <th>2° BIMESTRE</th>
            <th>3° BIMESTRE</th>
            <th>4° BIMESTRE</th>
            <th>PROMEDIO</th>
            <th>ESTADO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reportes as $n)
        <tr>
        <td class="active">{{$n['id']}}</td> 
        <td class="active">{{$n['año']}}</td>
        <td class="active">{{$n['mes']}}</td>
        <td class="active">{{$n['docente']}}</td>
        <td class="active">{{$n['grupo']}}</td>
        <td class="active">{{$n['estudiante']}}</td>
        <td class="active">{{$n['nota1']}}</td>
        <td class="active">{{$n['nota2']}}</td>
        <td class="active">{{$n['nota3']}}</td>
        <td class="active">{{$n['nota4']}}</td>
        <td class="active">{{$n['promedio']}}</td>
        <td class="active">{{$n['estado']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection