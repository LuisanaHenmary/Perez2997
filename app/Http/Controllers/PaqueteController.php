<?php

namespace App\Http\Controllers;
use App\Models\Paquete;
use Illuminate\Http\Request;


class PaqueteController extends Controller
{
    public function creaPaquete(Request $request){

    	

    	if(isset($request->Crear)){
    		
    		$registro = new Paquete;
    		$registro->nombre = $request->nomb_paqu;
    		
    		if (isset($request->internet)) {
    			$registro->precio= $request->prec_internet;;
    			 $registro->internet = $request->internet;
    		}
    		
    		$registro->save();
    		return back()->with('mensaje', 'Paquete guardado');
    		/*if (isset($request->telefonia)) {
    			$puntos.=$request->telefonia.' ';
    		}

    		if (isset($request->cable)) {
    			$puntos.=$request->internet.' ';
    		}

    		dd('sercisios '.$puntos);*/
    		
    	}
    	
    }
}
