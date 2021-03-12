@extends('publica')

@section('pageName')
    Home
@endsection

@section('direccion')
	{{route('administradores.home')}}
@endsection

@section('link1')
	Inicio
@endsection

@section('direccion2')
	{{route('administradores.paquete')}}
@endsection

@section('link2')
	Paquetes
@endsection

@section('direccion3')
	{{route('administradores.canales')}}
@endsection

@section('link3')
	Canales
@endsection

@section('direccion4')
	{{route('pagprincipal')}}
@endsection

@section('link4')
	Salir
@endsection

@section('contenido')
	<p>Bienvenido administrador</p>
@endsection
