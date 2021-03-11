@extends('publica')

@section('pageName')
    Home
@endsection

@section('direccion')
	{{route('suscriptores.servicios')}}
@endsection

@section('link1')
	Regresar
@endsection

@section('contenido')

	@if($buscar->count())
		@foreach($buscar as $p)
			<p>{{$p->precio}}</p>
		@endforeach
	@endif
	
@endsection