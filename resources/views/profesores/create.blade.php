@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/profesor')}}" method="post">
    @csrf
    @include('profesores.form',['modo'=>'Crear'])
</form>
</div>
@endsection