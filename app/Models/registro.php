<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;

    public function icurso(){
        return $this->hasOne(Curso::class, 'curso_id', 'id');
    }



public function alumno(){
    return $this->belongsTo(Alumno::class,'alumno_id');
}

public function curso(){
    return $this->belongsTo(Curso::class,'curso_id');
}
/*
public function profesor(){
   //return (($this->curso())->hasOne(CursoProfesor::class,'id','curso_id'))->profesor();
   return $this->curso();
//$curso = $this->curso();
//$cursoProfesor = CursoProfesor::all()->where('curso_id',$curso->id);
//return $cursoProfesor->profesor();
}
*/
public function cursoOne(){
    return Curso::find($this->id);
}



}
