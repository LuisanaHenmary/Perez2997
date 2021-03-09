<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{

	public function hola() {
    	return 'hola';
	}

	public function principal() {
    	return view('pagprincipal');
	}

    public function ingreso() {
    	return view('ingreso');
	}
	
	public function registro(){
		return view('registro');
	}
	/*public function paquete(){
		$res = "resulto esto";
		return view('administradores.paquete',compact('res'));
	}*/
}
