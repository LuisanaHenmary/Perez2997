@extends('publica')

@section('pageName')
    Home
@endsection

@section('direccion')
	#
@endsection

@section('link1')
	catalogo
@endsection

@section('direccion2')
	{{route('pagprincipal')}}
@endsection

@section('link2')
	salir
@endsection

@section('contenido')
	<p>Bienvenido suscriptor</p>
@endsection