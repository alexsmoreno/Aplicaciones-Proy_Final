
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>{{$modo}} a {{$alumno->NOMBRES ." ".$alumno->APELLIDOS }}</h1>
<div class="form-group">
<input type="hidden" name="idCursoprof" value="{{$idCurso}}"  >
<input type="hidden" name="idAlumno" value="{{$alumno->id}}"  >

    <div class="form-group">
        <label for="nota1">NOTA 1:</label>
        <input type="text" name="nota1" class="form-control" value="{{old('nombres',isset($nota->nota1)?$nota->nota1:'')}}" id="nota1" required>
    </div>

    <div class="form-group">
        <label for="nota2">NOTA 2:</label>
        <input type="text" name="nota2" class="form-control" value="{{old('nombres',isset($nota->nota2)?$nota->nota2:'')}}" id="nota2" required>
    </div>

    <div class="form-group">
        <label for="nota3">NOTA 3:</label>
        <input type="text" name="nota3" class="form-control" value="{{old('nombres',isset($nota->nota3)?$nota->nota3:'')}}" id="nota3" required>
    </div>

    <div class="form-group">
        <label for="nota4">NOTA 4:</label>
        <input type="text" name="nota4" class="form-control" value="{{old('nombres',isset($nota->nota4)?$nota->nota4:'')}}" id="nota4" required>
    </div>

<div class="form-group">
<input type="submit" value="{{$modo}} Alumno" class="btn btn-success">
<a href="{{url('/cursoProfesor/')}}" class="btn btn-warning">Regresar </a>
</div>
</body>
</html>
