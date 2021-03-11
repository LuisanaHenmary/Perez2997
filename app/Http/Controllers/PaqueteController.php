<?php

namespace App\Http\Controllers;
use App\Models\Paquete;
use Illuminate\Http\Request;


class PaqueteController extends Controller
{
    public function creaPaquete(Request $request){

    	$precio =0;

    	if(isset($request->Crear)){
    		
    		$registro = new Paquete;
    		$registro->nombre = $request->nomb_paqu;
    		
    		if (isset($request->internet) && isset($request->prec_internet)) {
    			
    			 $registro->internet = $request->internet;
    			 $precio += $request->prec_internet;

    		}
    		
    		if (isset($request->telefonia) && isset($request->prec_tel)) {

    			$registro->minutosTelefonia = $request->telefonia;
    			$precio += $request->prec_tel;
    		
    		}

    		if (isset($request->cable)  && isset($request->prec_cable)) {
    		
    			$registro->planCable = $request->cable;
    			$precio += $request->prec_cable;
    		
    		}

    		$registro->precio= $precio;
    		$registro->save();

    		return back()->with('mensaje', 'Paquete guardado');	
    		
    	}
    	
    }
}
