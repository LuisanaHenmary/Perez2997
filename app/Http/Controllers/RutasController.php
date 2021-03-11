<?php

namespace App\Http\Controllers;
use App\Models\Paquete;
use Illuminate\Http\Request;

class RutasController extends Controller
{

	public function principal() {
    	return view('pagprincipal');
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

	public function inicio2(){
		return view('suscriptores.home2');
	}

	public function servicio(){
		return view('suscriptores.servicios');
	}

	 public function catalogo(){

    	$muestras = Paquete::all();
    	return view('suscriptores.servicios',compact('muestras'));
    }

}
