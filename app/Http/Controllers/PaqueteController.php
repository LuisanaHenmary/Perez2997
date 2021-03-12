<?php

namespace App\Http\Controllers;
use App\Models\Paquete;
use Illuminate\Http\Request;
use App\Models\Canal;


class PaqueteController extends Controller
{
    public function creaPaquete(Request $request){

    	$precio = 0;
        $categoria = '';

    	if(isset($request->Crear)){
    		
            if (isset($request->servicios)) {
                
                
                if(Paquete::nombre($request->nomb_paqu)->count()){
                    return back()->with('mensaje', 'Este paquete ya existe'); 
                }

                

                $registro = new Paquete;
                $registro->nombre = $request->nomb_paqu;
            
                if (isset($request->internet) && isset($request->prec_internet)) {
                
                    $registro->internet = $request->internet;
                    $precio += $request->prec_internet;
                    $categoria .= 'internet';


                }else{
                    $registro->internet = 0;
                }
            
                if (isset($request->telefonia) && isset($request->prec_tel)) {

                    $registro->minutosTelefonia = $request->telefonia;
                    $precio += $request->prec_tel;
                
                    if ($categoria != '') {
                
                        $categoria .=' ';
                
                     }

                    $categoria .= 'telefonia';
            
                }else{

                    $registro->minutosTelefonia = 0;
                
                }

                if (isset($request->cable)  && isset($request->prec_cable)) {
            
                    $registro->planCable = $request->cable;
                    $precio += $request->prec_cable;

                    if ($categoria != '') {
                
                        $categoria .=' ';
                
                    }

                    $categoria .= 'cable';
            
                }else{
                    $registro->planCable ="";
                }

                $registro->precio = $precio;
                $registro->categoria = $categoria;
                $registro->save();

                return back()->with('mensaje', 'Paquete guardado'); 

            }else{

                return back()->with('mensaje', 'Elija un servicio'); 

            }
    		
    	}
    	
    }

    public function guardCanal(Request $request){

        if(isset($request->Guardar)){

            if (isset($request->cable)) {
                $plan = '';
                $Agregado = new Canal;
                $Agregado->nombreCanal = $request->nombrCanal;
                foreach ($request->cable as $c) {
                    if ($plan!='') {
                        $plan .= ' ';
                    }
                    $plan .= $c;
                }
                $Agregado->plan = $plan;
                $Agregado->link = $request->linkCanal;
                $Agregado->save();
                return back()->with('mensaje', 'Canal guardado'); 
            }else{

                    return back()->with('mensaje', 'Elija un plan de cable'); 
                
                }
            }

    }

   
}
