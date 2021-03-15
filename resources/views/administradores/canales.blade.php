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
	@if ( session('mensaje') )
			<script type="text/javascript">
				alert("{{session('mensaje')}}");
			</script>
	@endif
	<form class="centerleft" action="{{route('administradores.canales')}}" method="POST" name="GuardaCanales">

		@csrf
		<label for="nombrCanal">Nombre:</label>
		<input type="text" name="nombrCanal" id="nombrCanal" required><br><br>
		<label>Plan clave:</label><br>
		<input type="checkbox" name="cable[]"  id="paja" value="paja" >
		<label for="paja">Plan paja</label><br>
		<input type="checkbox" name="cable[]" id="madera" value="madera">
		<label for="madera">Plan madera</label><br>
		<input type="checkbox" name="cable[]" id="ladrillo" value="ladrillo" >
		<label for="ladrillo">Plan ladrillo</label><br>
		<br><br>
		<label for="linkCanal">Link:</label>
		<input type="text" name="linkCanal" id="linkCanal" required>
		<br><br>
		<input type="submit" name="Guardar" value="Guardar" class="clase1">
	</form>

	
@endsection
