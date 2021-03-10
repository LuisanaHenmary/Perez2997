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
		@if($datos->count())

		@foreach($datos as $d)
		<p>hola {{$d->clave}} 2</p>
	@endforeach
	@endif
@endsection
