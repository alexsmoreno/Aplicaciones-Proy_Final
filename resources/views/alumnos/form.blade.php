
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
    <label for="nombres">DNI:</label>
    <input type="text" id="nombres" name="dni" class="form-control" value="{{old('nombres',isset($alumno->DNI)?$alumno->DNI:'')}}" id="nombres" required>
</div>
<div class="form-group">
    <label for="nombres">Apellidos:</label>
    <input type="text" name="apellidos" class="form-control" value="{{old('apellidos',isset($alumno->APELLIDOS)?$alumno->APELLIDOS:'')}}" id="apellidos" required>
</div>
<div class="form-group">
    <label for="nombres">Nombres:</label>
    <input type="text" name="nombres" class="form-control" value="{{old('especialidad',isset($alumno->NOMBRES)?$alumno->NOMBRES:'')}}" id="especialidad" required>
</div>
<div class="form-group">
    <input type="submit" value="{{$modo}} Alumno" class="btn btn-success">
    <a href="{{url('/alumno/')}}" class="btn btn-warning">Regresar </a>
</div>


</body>
</html>
