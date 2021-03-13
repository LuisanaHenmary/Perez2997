@extends('publica')

@section('pageName')
    Ingreso
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

	 @if ( session('mensaje') )
			<script type="text/javascript">
				alert("{{session('mensaje')}}");
			</script>
	@endif
	
	<form class="centerleft" action="{{ route('ingreso') }}" method="POST">
		@csrf
		<label for="Usuario" class="p_bottom">Usuario:</label>
		<input type="text" name="Usuario" id="Usuario" required="true" class="p_bottom"><br>
		<label for="Clave" class="p_bottom">Contraseña:</label>
		<input type="password" name="Clave" id="Clave" required="true" class="p_bottom"><br>
		<input type="submit" name="Ingresar" value="Ingresar" required="true" class="clase1">
	</form>


	

	<p class="centerleft">¿No tiene cuenta? <a style="color:blue;" href="{{route('registro')}}">Registrate</a></p>
@endsection