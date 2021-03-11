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
	{{route('pagprincipal')}}
@endsection

@section('link3')
	Salir
@endsection

@section('contenido')



	<form class="centerleft">
		
		<label  for="nomb_paqu">Nombre paquete:</label>	
		<input type="text" name="nomb_paqu" id="nomb_paqu">	<br><br>

		<label  class="p_bottom" for="sinternet">Internet</label>
		<input type="checkbox" name="servicios"  id="sinternet" value="internet" onclick="internetOpc()">
		<label for="stelefonia">Telefonia</label>
		<input type="checkbox" name="servicios" id="stelefonia" value="telefonia" onclick="telefoniaOpc()">
		<label >Cable</label>
		<input type="checkbox" name="servicios" id="sclave" value="clave" onclick="cableOpc()">
		<br><br>
		
		
		<br><br>
		<label for="internet">Banda:</label>
		<input type="number" name="internet" id="internet" disabled step='5'><br><br>
		<label for="telefonia">Minutos de telefonia:</label>
		<select name="telefonia" id="telefonia" disabled  autofocus>
			<option value="0">-</option>
			<option value="200">200</option>
			<option value="500">500</option>
		</select>
		<br><br>
		<label for="cable">Plan clave:</label>
		<select name="cable" id="cable" disabled  autofocus>
			<option value="0">-</option>
			<option value="20">paja</option>
			<option value="30">madera</option>
			<option value="50">ladrillo</option>
		</select>
		<br><br>
		<input type="submit" name="" class="clase1">
	</form>
		
		


	<script type="text/javascript">
		
		var internet = document.getElementById('internet');
		var telefonia = document.getElementById('telefonia');
		var cable = document.getElementById('cable');

		function internetOpc(){

			if (internet.hasAttribute('disabled')) {

				internet.removeAttribute('disabled');
				
			}else{

				internet.setAttribute('disabled','false');
			}
			
		}

		function telefoniaOpc(){

			if (telefonia.hasAttribute('disabled')) {

					telefonia.removeAttribute('disabled');
					
			}else{

				telefonia.setAttribute('disabled','false');

			}
			
		}

		function cableOpc(){
			if (cable.hasAttribute('disabled')) {

					cable.removeAttribute('disabled');
					
			}else{

				cable.setAttribute('disabled','false');
				
			}
		}

		
	</script>

@endsection
