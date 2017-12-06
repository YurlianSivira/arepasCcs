<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public function imagenes(){
    	return $this->hasMany(Imagen::class, 'productos_id');
    }
}
