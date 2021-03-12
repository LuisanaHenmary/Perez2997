<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\suscriptor;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function ingresar(Request $request){

    	if (isset($request->Ingresar)) {


            $busqueda = Usuario::user($request->Usuario);
            $datos = $busqueda->get();

    	    if ($busqueda->count()){
            
                 if ($busqueda->value('clave') == $request->Clave) {


                    if ($busqueda->value('tipoUsu')=='a') {
                        
                        return view('administradores.home',compact('datos'));
                        
                    }
                    if ($busqueda->value('tipoUsu')=='s') {

                        return view('suscriptores.home2',compact('datos'));
                    
                    }
                
                }    

                return back()->with('mensaje', 'contraseña invalida');	
                
            }
    		
            return back()->with('mensaje', 'Usuario invalido');
    	
        }
    
    }

    public function registrar(Request $request){

        if (isset($request->Registrar)) {

            $res = [];

            $puntos = 0;


            if (Usuario::user($request->Usuario)->count()) {
               
                $res[0] = 'Usuario existente ';
                                      
            }else{

                $puntos++; 
                 
            }


            if (Usuario::mail($request->Correo)->count()) {  

                $res[1] = 'Correo en uso';
                   
            }else{

                $puntos++;
            }


            if ($request->Clave == $request->Clavec) {

                if ($puntos == 2) {
                    
                    $registro = new Usuario;
                    $registro->Usuario = $request->Usuario;
                    $registro->nombres =  $request->Nombres;
                    $registro->apellidos = $request->Apellidos;
                    $registro->correo =  $request->Correo;
                    $registro->clave = $request->Clave;
                    $registro->tipoUsu =  $request->TipoUsuario;
                    $registro->save();
                     return back()->with('mensaje', 'Registro exitoso');
                }

            }else{

                $res[2] = 'las claves no coinciden';

            }
            


            return view('registro',compact('res'));

        }
    }


    
}
