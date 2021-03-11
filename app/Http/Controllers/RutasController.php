<?php

namespace App\Http\Controllers;

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

	public function inicio2(){
		return view('suscriptores.home2');
	}

	public function paquete(){

		return view('administradores.paquete');
	}


}
