@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/cursoProfesor/')}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('cursoProfesor.form',['modo'=>'Calificar'])
</form>
</div>
@endsection