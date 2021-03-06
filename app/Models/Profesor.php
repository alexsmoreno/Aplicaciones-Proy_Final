<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;





public function user(){
    return $this->belongsTo(User::class,'user_id');
}


public function notas(){
    return $this->hasMany(Notas::class,'id');
}

public function cursosProfesores(){
    return $this->hasOne(CursoProfesor::class,'id');
}
 



}
