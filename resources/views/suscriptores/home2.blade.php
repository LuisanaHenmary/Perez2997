@extends('publica')

@section('pageName')
    Home
@endsection

@section('direccion')
	{{route('suscriptores.home2',['usuario'=>$nombre])}}
@endsection

@section('link1')
	Inicio
@endsection

@section('direccion2')
	{{route('suscriptores.servicios',['usuario'=>$nombre])}}
@endsection

@section('link2')
	Servicios
@endsection


@section('direccion3')
	{{route('pagprincipal')}}
@endsection

@section('link3')
	Salir
@endsection

@section('contenido')
	<p>Bienvenido suscriptor</p>

@endsection