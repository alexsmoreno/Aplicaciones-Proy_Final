<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>{{$modo}} Registro</h1>
<div class="form-group">
<label for="nombres">Alumnos:</label>
 <select name="alumno_id" id="alumno_id" class="form-control">
     @foreach ($arreData  as $data )
         <option value="{{$data->id}}">{{$data->NOMBRES." ".$data->APELLIDOS}}</option>
     @endforeach
 </select>
</div>
<div class="form-group">
    <label for="nombres">Cursos:</label>
     <select name="curso_id" id="curso_id" class="form-control">
        @foreach ($arreDataCursos as $curso )
        <option value="{{$curso->id}}">{{$curso->curso}}</option>
        @endforeach
     </select>
    </div>
        <div class="form-group">
            <label for="listGrupos">Grupos:</label>
             <select name="grupo" id="grupo" class="form-control">
             <option value="1">A</option>
             <option value="2">B</option>
             <option value="3">C</option>
             <option value="4">D</option>
             </select>
        </div>
<div class="form-group">
<input type="submit" value="{{$modo}} Registro" class="btn btn-success">
<a href="{{url('/registro/')}}" class="btn btn-warning">Regresar </a>
</div>
    
</body>
</html>