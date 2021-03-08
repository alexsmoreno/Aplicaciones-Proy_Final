<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;

    public function alumno(){ //use : $registro->alumno
        return $this->belongsTo(Alumno::class,'alumno_id');
    }
    public function curso(){ //use : $registro->curso
        return $this->hasOne(Curso::class, 'id', 'curso_id');
    }
    public function profesor(){ //use : $registro->profesor()
        $CursoProfesor = CursoProfesor::where('profesor_id', $this->id)->first();
        return $CursoProfesor->profesor;
    }

    public function profesorAsignado(){
        $CursoProfesor = CursoProfesor::where('profesor_id', $this->id)->first();
        if ($CursoProfesor){
            return $CursoProfesor->profesor->user->name." ".$CursoProfesor->profesor->user->last_name;

        }
        return "No asignado";
    }
    public function profesorAsignado_e(){
        $CursoProfesor = CursoProfesor::where('profesor_id', $this->id)->first();
        if ($CursoProfesor){
            return $CursoProfesor->profesor->especialidad;

        }
        return "";
    }
}
