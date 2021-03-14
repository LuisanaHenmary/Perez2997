<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    use HasFactory;
    

    public function scopeCanal($query,$nombre){

    	$query->where('nombreCanal',$nombre);
    	
    }
    
}
