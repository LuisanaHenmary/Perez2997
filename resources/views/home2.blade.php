@extends('publica')

@section('pageName')
    Home
@endsection

@section('direccion')
	{{route('hola')}}
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
	@if($busqueda->count())
		<p>Bienvenida {{$busqueda->nombres}}</p>
	@endif
@endsection
