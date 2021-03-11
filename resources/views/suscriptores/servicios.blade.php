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
	{{route('suscriptores.servicios')}}
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
	@if($muestras->count())
		@foreach($muestras as $p)
			<p>--------------</p>
			<p>{{$p->nombre}}</p>
			<p>{{$p->internet}}</p>
			<p>{{$p->minutosTelefonia}}</p>
			<p>{{$p->planCable}}</p>
			<p>{{$p->precio}}</p>

		@endforeach
	@endif
	<p>Bienvenido al servicio</p>
	
@endsection