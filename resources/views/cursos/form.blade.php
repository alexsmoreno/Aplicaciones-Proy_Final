
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Editar Curso</title>
</head>
<body>

<h1>{{$modo}} Curso</h1>
<div class="form-group">
<label for="Codigo">Codigo:</label>
<input type="text" name="Codigo"  value="{{isset($curso->codigo)?$curso->codigo:''}}" id="Codigo">
</div>
<div class="form-group">
<label for="curso">Nombre Curso:</label>
<input type="text" name="curso" value="{{isset($curso->curso)?$curso->curso:''}}"id="curso">
</div>
<div class="form-group">
<input type="submit" value="{{$modo}} Curso" class="btn btn-success">
<a href="{{url('/curso/')}}" class="btn btn-warning">Regresar </a>
</div>
</body>
</html>