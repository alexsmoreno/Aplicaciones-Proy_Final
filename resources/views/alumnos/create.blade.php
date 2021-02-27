
@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/alumno')}}" method="post">
    @csrf
    @include('alumnos.form',['modo'=>'Crear'])
</form>
</div>
@endsection