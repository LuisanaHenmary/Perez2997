<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    use HasFactory;


    public function scopeUser($query,$Usuario){

    	
    	$query->where('Usuario',$Usuario);
    }
    
    public function scopeMail($query,$correo){

    	
    	$query->where('correo',$correo);
    }
}
