@extends('publica')

@section('pageName')
    Home
@endsection

@section('direccion')
	{{route('home')}}
@endsection

@section('link1')
	inicio
@endsection

@section('direccion2')
	{{route('administradores.paquete')}}
@endsection

@section('link2')
	paquetes
@endsection

@section('direccion3')
	{{route('pagprincipal')}}
@endsection

@section('link3')
	salir
@endsection

@section('contenido')
	<p>Bien</p>
@endsection
