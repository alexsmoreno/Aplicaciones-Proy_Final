
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

<h1>{{$modo}} Calificar</h1>
<div class="form-group">
<label for="nota1">NOTA 1</label>
<input type="text" name="nota1"  value="" id="nota1">
</div>
<div class="form-group">
    <label for="nota1">NOTA 2</label>
    <input type="text" name="nota1"  value="" id="nota1">
    </div>
    <div class="form-group">
        <label for="nota1">NOTA 3</label>
        <input type="text" name="nota1"  value="" id="nota1">
        </div>
        <div class="form-group">
            <label for="nota1">NOTA 4</label>
            <input type="text" name="nota1"  value="" id="nota1">
            </div>
<div class="form-group">
<input type="submit" value="{{$modo}} Alumno" class="btn btn-success">
<a href="{{url('/cursoProfesor/')}}" class="btn btn-warning">Regresar </a>
</div>
</body>
</html>