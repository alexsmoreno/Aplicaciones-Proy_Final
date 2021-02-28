<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoProfesor extends Model
{
    use HasFactory;

    public function curso(){
        return $this->belongsTo(Curso::class,'curso_id');
    }

    public function profesor(){
        return $this->belongsTo(Profesor::class,'profesor_id');
    }



}
