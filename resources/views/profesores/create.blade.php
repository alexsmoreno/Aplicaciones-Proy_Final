@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Profesor</h1>
<form action="{{url('/profesor')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" class="form-control" value="{{old('nombres',isset($profesor->user->name)?$profesor->user->name:'')}}" id="nombres" required>
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" class="form-control" value="{{old('apellidos',isset($profesor->user->last_name)?$profesor->user->last_name:'')}}" id="apellidos" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" value="{{old('email',isset($profesor->user->email)?$profesor->user->email:'')}}" id="email" required>
    </div>
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" class="form-control" value="{{old('password','')}}" id="password" required>
    </div>

    <div class="form-group">
        <input type="submit" value="Registrar Profesor" class="btn btn-success">
        <a href="{{url('/profesor/')}}" class="btn btn-warning">Regresar </a>
    </div>


</form>


</div>
@endsection
