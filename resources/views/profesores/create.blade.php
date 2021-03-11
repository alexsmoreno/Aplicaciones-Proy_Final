@extends('layouts.app')

@section('content')
<div class="container"> 
    <h1>Registrar Profesor</h1>
<form action="{{url('/profesor')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres"  value="{{isset($profesor->user->name)?$profesor->user->name:''}}" id="nombres">
        </div>
        <div class="form-group">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="{{isset($profesor->user->last_name)?$profesor->user->last_name:''}}"id="apellidos">
        </div>
        <div class="form-group">
            <label for="email">Correo:</label>
            <input type="text" name="email" value="{{isset($profesor->user->email)?$profesor->user->email:''}}"id="email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="text" name="password" value=""id="password">
                </div>
                <div class="form-group">
                    <input type="submit" value="Registrar Profesor" class="btn btn-success">
                    <a href="{{url('/profesor/')}}" class="btn btn-warning">Regresar </a>
                    </div>

</form>
</div>
@endsection