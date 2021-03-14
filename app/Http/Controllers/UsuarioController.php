<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Compra;
use App\Models\Paquete;
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
                        
                         return redirect()->route('administradores.home');
                        
                    }
                    if ($busqueda->value('tipoUsu')=='s') {

                        return redirect()->route('suscriptores.home2',['usuario'=> $request->Usuario]);
                    
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

    public function comprar(Request $request ){
         


            $muestras = Compra::user($request->usuario)->pack($request->paquete)->get();
           

            if ($muestras->count()) {
                return back()->with('mensaje', 'ya tienes este paquete');
            }

            $suscripcion = new Compra;
            $suscripcion->usuario = $request->usuario;
            $suscripcion->paquete = $request->paquete;
            $suscripcion->factura = $request->precio;
            $suscripcion->activo = 1;
            $suscripcion->save();
            return back()->with('mensaje', 'Paquete Comprado');
            
    }


    public function solicitar(Request $request ){

            $busqueda = Compra::user($request->usuario)->pack($request->paquete);
            $datos = $busqueda->get();

            if ($datos->count()) 
            {

                foreach ($datos as $b) {

                    if ($b->activo == 0) {
                     
                        $busqueda->update(['activo'=>1]);
                    
                    }

                     if ($b->activo == 1) {
                    
                        $busqueda->update(['activo'=>0]);
                    
                    }

                }


               
            }

           return back();
        //   
    }

    public function borrar(Request $request){
        $busqueda = Compra::user($request->usuario)->pack($request->paquete)->delete();
        return back();
    }
}
    
