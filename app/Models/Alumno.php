<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public function registros(){
        return $this->hasMany(registro::class,'id');
    }
    
    public function notas(){
        return $this->hasMany(Notas::class,'id');
    }
  

}
