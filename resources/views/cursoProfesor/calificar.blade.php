@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('cursoProfesor.store',$alumno->id)}}" method="post">
    @csrf
    @include('cursoProfesor.form',['modo'=>'Calificar'])
</form>
</div>
@endsection