<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>{{$modo}} Profesor</h1>
<div class="form-group">
<label for="nombres">Nombres:</label>
<input type="text" name="nombres"  value="{{isset($profesor->nombres)?$profesor->nombres:''}}" id="nombres">
</div>
<div class="form-group">
<label for="apellidos">Apellidos:</label>
<input type="text" name="apellidos" value="{{isset($profesor->apellidos)?$profesor->apellidos:''}}"id="apellidos">
</div>
<div class="form-group">
<label for="especialidad">Especialidad:</label>
<input type="text" name="especialidad" value="{{isset($profesor->especialidad)?$profesor->especialidad:''}}"id="especialidad">
</div>
<div class="form-group">
<input type="submit" value="{{$modo}} Profesor" class="btn btn-success">
<a href="{{url('/profesor/')}}" class="btn btn-warning">Regresar </a>
</div>
    
</body>
</html>