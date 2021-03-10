<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{


    public function imprimir(){
        $user = Usuario::all();

        return view('imprimir',compact('user'));

    }

	public function buscarUsuario($cadena){

    	$user = Usuario::all();

    	foreach ($user as $value) {
    		//
            //
            if (strcmp($cadena, $value->Usuario)==0) {

    			return $value;

    		}
   
    		return '';
    	
        }

    }


    public function buscarCorreo($cadena){
        
        $user = Usuario::all();

        foreach ($user as $value) {
            
            if ($cadena == $value->correo) {

                return $value;
            }
            
            return '';
        
        }

    }

    public function ingresar(Request $request){

    	if (isset($_POST['Ingresar'])) {

            dd($request->Usuario);

           /* $res = "";

            $busqueda = $this->buscarUsuario($request->Usuario);

    		if ($busqueda == ''){
                	
                $res .= 'Usuario invalido ';
            
            }else{
                if ($busqueda->clave == $request->Clave) {


                    if ($busqueda->tipoUsu=='a') {
                         return view('home',compact('busqueda'));
                    }
                    if ($busqueda->tipoUsu=='s') {
                         return view('home2',compact('busqueda'));
                    }
                  
                   
                
                }

                $res .= "contraseña invalida";

            }

    		
            return view('ingreso',compact('res'));*/
    	
        }
    
    }

    public function registrar(Request $request){

        if (isset($_POST['Registrar'])) {

            $res = [];

            $puntos = 0;
            if (($busqueda = $this->buscarUsuario($_POST['Usuario'])) == '') {
                
                   $puntos++; 
                    
            }else{

                    $res[0] = 'Usuario existente ';

            }

            if (($busqueda = $this->buscarCorreo($_POST['Correo'])) == '') {  

                $puntos++;
                   
            }else{

                $res[1] = 'Correo en uso';

            }


            if ($_POST['Clave'] == $_POST['Clavec']) {

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
