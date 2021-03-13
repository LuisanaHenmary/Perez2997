<?php

namespace App\Http\Controllers;
use App\Models\Paquete;
use App\Models\Canal;
use Illuminate\Http\Request;

class RutasController extends Controller
{

	public function principal() {
		$muestras = Paquete::all();
    	return view('pagprincipal',compact('muestras'));
	}

    public function ingreso() {
    	return view('ingreso');
	}
	
	public function registro(){
		return view('registro');
	}

	public function inicio(){
		return view('administradores.home');
	}

	public function paquete(){

		return view('administradores.paquete');
	}

	public function canales(){

		return view('administradores.canales');
	}

	public function inicio2($nombre){

		return view('suscriptores.home2',compact('nombre'));
	}

	
	 public function catalogo($nombre){

    	$muestras = Paquete::all();
    	return view('suscriptores.servicios',compact('muestras','nombre'));
    }

    public function infProduct($nombre,$paquete){
    	$buscar = Paquete::nombre($paquete)->get();
    	$canales = Canal::all();
    	
    	return view('suscriptores.informacion',compact('buscar','canales','nombre'));
    }

}
