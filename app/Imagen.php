<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    public function producto(){
    	return $this->hasMany(Productos::class, 'imagen_id');
    }

     protected $fillable = [
     'nombre'
     ];
}
