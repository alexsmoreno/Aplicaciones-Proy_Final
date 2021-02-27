
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

<h1>{{$modo}} Alumno</h1>
<div class="form-group">
<label for="dni">DNI</label>
<input type="text" name="dni"  value="{{isset($alumno->DNI)?$alumno->DNI:''}}" id="dni">
</div>
<div class="form-group">
<label for="apellidos">Apellidos</label>
<input type="text" name="apellidos" value="{{isset($alumno->APELLIDOS)?$alumno->APELLIDOS:''}}"id="apellidos">
</div>
<div class="form-group">
<label for="nombres">Nombres</label>
<input type="text" name="nombres" value="{{isset($alumno->NOMBRES)?$alumno->NOMBRES:''}}"id="nombres">
</div>
<div class="form-group">
<input type="submit" value="{{$modo}} Alumno" class="btn btn-success">
<a href="{{url('/alumno/')}}" class="btn btn-warning">Regresar </a>
</div>
</body>
</html>