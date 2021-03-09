<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{

	public function buscarUsuario($cadena){
    	$user = Usuario::all();

    	foreach ($user as $value) {
    		
            if ($cadena==$value->Usuario) {

    			return $value;

    		}
   
    		return '';
    	
        }

    }


    public function buscarCorreo($cadena){
        
        $user = Usuario::all();

        foreach ($user as $value) {
            
            if ($cadena==$value->correo) {

                return $value;
            }
            
            return '';
        
        }

    }

    public function ingresar(){

    	if (isset($_POST['Ingresar'])) {

            $res="";

            $busqueda = $this->buscarUsuario($_POST['Usuario']);

    		if ($busqueda==''){
                	
                $res.='Usuario invalido ';
            
            }else{
                if ($busqueda->clave==$_POST['Clave']) {
                  
                    return view('home',compact('busqueda'));
                
                }
                $res.="contraseña invalida";
            }

           
    		
            return view('ingreso',compact('res'));
    	
        }
    
    }

    public function registrar(){

        if (isset($_GET['Registrar'])) {

            $res="";

            if (($busqueda = $this->buscarUsuario($_GET['Usuario']))!='') {
                
                if ($busqueda->clave==$_GET['Clave']) {
                  
                    return view('home',compact('busqueda'));
                
                }

                $res.='contraseña invalida ';
            }

            return view('registro',compact('res'));

        }
    }


    
}
