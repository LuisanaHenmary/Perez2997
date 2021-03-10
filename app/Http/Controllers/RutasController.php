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

	public function inicio(){
		return view('home');
	}

	public function paquete(){

		return view('administradores.paquete');
	}
}
