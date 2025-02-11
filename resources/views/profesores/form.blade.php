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
        <input type="text" id="nombres" name="nombres" class="form-control" value="{{old('nombres',isset($profesor->user->name)?$profesor->user->name:'')}}" id="nombres" required>
    </div>
    <div class="form-group">
        <label for="nombres">Apellidos:</label>
        <input type="text" name="apellidos" class="form-control" value="{{old('apellidos',isset($profesor->user->last_name)?$profesor->user->last_name:'')}}"id="apellidos" required>
    </div>
    <div class="form-group">
        <label for="nombres">Especialidad:</label>
        <input type="text" name="especialidad" class="form-control" value="{{old('especialidad',isset($profesor->especialidad)?$profesor->especialidad:'')}}"id="especialidad" required>
    </div>
    <div class="form-group">
        <label for="nombres">Cursos:</label>
        <select name="curso_id" id="curso_id" class="form-control">
            @foreach ($arreDataCursos as $curso )
                <option value="{{$curso->id}}">{{$curso->curso}}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="{{$modo}} Profesor" class="btn btn-success">
    <a href="{{url('/profesor/')}}" class="btn btn-warning">Regresar </a>

</body>
</html>
