@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/curso/'.$curso->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('cursos.form',['modo'=>'Editar'])
</form>
</div>
@endsection