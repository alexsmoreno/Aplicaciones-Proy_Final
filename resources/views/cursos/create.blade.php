
@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/curso')}}" method="post">
    @csrf
    @include('cursos.form',['modo'=>'Crear'])
</form>
</div>
@endsection