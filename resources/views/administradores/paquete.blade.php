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



	<form class="centerleft" method="POST" action="{{route('administradores.crear')}}">
		@csrf
		<label  for="nomb_paqu">Nombre paquete:</label>	
		<input type="text" name="nomb_paqu" id="nomb_paqu">	<br><br>

		<label  class="p_bottom" for="sinternet">Internet</label>
		<input type="checkbox" name="servicios"  id="sinternet" value="internet" onclick="internetOpc()">
		<label for="stelefonia">Telefonia</label>
		<input type="checkbox" name="servicios" id="stelefonia" value="telefonia" onclick="telefoniaOpc()">
		<label >Cable</label>
		<input type="checkbox" name="servicios" id="sclave" value="clave" onclick="cableOpc()">
		<br><br>

		<label for="internet">Internet:</label><br>
		<label for="internet">Banda:</label>
		<input type="number" name="internet" id="internet" step='5' disabled>
		<label for="prec_internet">Precio:</label>
		<input type="text" name="prec_internet" id="prec_internet" style="width: 50px;" disabled><br><br>

		<label for="telefonia">Telefonia:</label><br>
		<label for="telefonia">Minutos de telefonia:</label>
		<select name="telefonia" id="telefonia" disabled  autofocus>
			<option value="0">-</option>
			<option value="200">200</option>
			<option value="500">500</option>
		</select>
		<label for="prec_tel">Precio:</label>
		<input type="text" name="prec_tel" id="prec_tel" style="width: 50px;" disabled>
		<br><br>

		<label for="cable">Plan clave:</label>
		<select name="cable" id="cable"   autofocus disabled>
			<option value="0">-</option>
			<option value="20">paja</option>
			<option value="30">madera</option>
			<option value="50">ladrillo</option>
		</select>
		<label for="prec_cable">Precio:</label>
		<input type="text" name="prec_cable" id="prec_cable" style="width: 50px;" disabled>

		<br><br>
		<input type="submit" name="Crear" class="clase1">
	</form>
		
	@if ( session('mensaje') )
    	<div class="centerleft" >{{ session('mensaje') }}</div>
	@endif


	<script type="text/javascript">
		
		var internet = document.getElementById('internet');
		var pInternet = document.getElementById('prec_internet');
		var telefonia = document.getElementById('telefonia');
		var pTelefono = document.getElementById('prec_tel');
		var cable = document.getElementById('cable');
		var pCable = document.getElementById('prec_cable');

		function internetOpc(){

			if (internet.hasAttribute('disabled') && pInternet.hasAttribute('disabled')) {

				internet.removeAttribute('disabled');
				pInternet.removeAttribute('disabled')
				
			}else{
				pInternet.setAttribute('disabled','false');
				internet.setAttribute('disabled','false');
			}
			
		}

		function telefoniaOpc(){

			if (telefonia.hasAttribute('disabled') && pTelefono.hasAttribute('disabled')) {

					telefonia.removeAttribute('disabled');
					pTelefono.removeAttribute('disabled');
					
			}else{

				telefonia.setAttribute('disabled','false');
				pTelefono.setAttribute('disabled','false');

			}
			
		}

		function cableOpc(){
			if (cable.hasAttribute('disabled') && pCable.hasAttribute('disabled')) {

					cable.removeAttribute('disabled');
					pCable.removeAttribute('disabled');
					
			}else{

				cable.setAttribute('disabled','false');
				pCable.setAttribute('disabled','false');

			}
		}

		
	</script>

@endsection
