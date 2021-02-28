<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;



public function alumno(){
    return $this->belongsTo(Alumno::class,'alumno_id');
}

public function curso(){
    return $this->belongsTo(Curso::class,'curso_id');
}

}
