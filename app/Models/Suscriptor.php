<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{
    use HasFactory;


    public function scopeUser($query,$Usuario){

    	$query->where('usuario',$Usuario);
    
    }

    public function scopePack($query,$Paquete){

    	$query->where('paquete',$Paquete);
    
    }

        public function scopeAct($query,$Actividad){

    	$query->where('activo',$Actividad);
    
    }

}
