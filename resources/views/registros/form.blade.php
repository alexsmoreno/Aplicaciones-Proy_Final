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
 <select name="lisAlumnos" id="lisAlumnos" class="form-control">
     @foreach ($arreData  as $data )
         <option value="{{$data ->alumno->id}}">{{$data ->alumno->NOMBRES." ".$data ->alumno->APELLIDOS}}</option>
     @endforeach
 </select>
</div>
<div class="form-group">
    <label for="nombres">Cursos:</label>
     <select name="lisCursos" id="lisCursos" class="form-control">
        @foreach ($arreData  as $data )
        <option value="{{$data->curso->id}}">{{$data ->curso->curso}}</option>
        @endforeach
     </select>
    </div>
    <div class="form-group">
        <label for="nombres">Profesores:</label>
         <select name="lisProfesores" id="lisProfesores" class="form-control">
            @foreach ($arreData  as $data)
         <option value="{{$data->profesor->id}}">{{$data ->profesor->nombres ." ". $data ->profesor->apellidos }}</option>
            @endforeach
         </select>
        </div>
        <div class="form-group">
            <label for="listGrupos">Grupos:</label>
             <select name="listGrupos" id="listGrupos" class="form-control">
             <option value="A">A</option>
             <option value="B">B</option>
             <option value="C">C</option>
             <option value="D">D</option>
             </select>
        </div>
<div class="form-group">
<input type="submit" value="{{$modo}} Registro" class="btn btn-success">
<a href="{{url('/registro/')}}" class="btn btn-warning">Regresar </a>
</div>
    
</body>
</html>