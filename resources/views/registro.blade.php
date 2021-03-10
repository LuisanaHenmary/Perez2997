@extends('publica');

@section('pageName')
    registro
@endsection

@section('direccion')
	{{route('pagprincipal')}}
@endsection

@section('link1')
	Inicio
@endsection

@section('direccion2')
	{{route('ingreso')}}
@endsection

@section('link2')
	Ingresar
@endsection

@section('direccion3')
	{{route('registro')}}
@endsection

@section('link3')
	Registrar
@endsection

@section('contenido')
	<form action="{{ route('ind') }}" method="POST">
		@csrf
		<label for="Usuario" class="p_bottom">Nombre de Usuario:</label>
		<input type="text" name="Usuario" id="Usuario" required="true" class="p_bottom"><br>
		<label for="Nombres" class="p_bottom">Nombres:</label>
		<input type="text" name="Nombres" id="Nombres" required="true" class="p_bottom"><br>
		<label for="Apellidos" class="p_bottom">Apellidos:</label>
		<input type="text" name="Apellidos" id="Apellidos" required="true" class="p_bottom"><br>
		<label for="Correo" class="p_bottom">correo electronico:</label>
		<input type="text" name="Correo" id="Correo" class="p_bottom"><br>
		<label for="Clave" class="p_bottom">Contraseña:</label>
		<input type="password" name="Clave" id="Clave" required="true" class="p_bottom"><br>
		<label for="Clavec" class="p_bottom">Confirmar contraseña:</label>
		<input type="password" name="Clavec" id="Clavec" required="true" class="p_bottom"><br>
		<input type="hidden" name="TipoUsuario" id="TipoUsuario" value="suscriptor(a)">

		<input type="submit" name="Registrar" value="Registrar" required="true" class="clase1">
	</form>
	@if(isset($res))
		@foreach($res as $s)
			<p>{{$s}}</p>
		@endforeach
	@endif

	@if ( session('mensaje') )
    	<div >{{ session('mensaje') }}</div>
	@endif
@endsection

