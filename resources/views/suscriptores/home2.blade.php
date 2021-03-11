@extends('publica')

@section('pageName')
    Home
@endsection

@section('direccion')
	{{route('suscriptores.home2')}}
@endsection

@section('link1')
	Inicio
@endsection

@section('direccion2')
	{{route('pagprincipal')}}
@endsection

@section('link2')
	Salir
@endsection

@section('contenido')
	<p>Bienvenido suscriptor</p>
@endsection