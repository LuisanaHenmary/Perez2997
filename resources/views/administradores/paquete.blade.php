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


	<form class="centerleft" method="POST" action="{{route('administradores.paquete')}}" name="CreaPaquete">
		@csrf


		<label  for="nomb_paqu">Nombre paquete:</label>	
		<input type="text" name="nomb_paqu" id="nomb_paqu" required>	<br><br>

		<label>Servicios:</label><br>	
		<label  class="p_bottom" for="sinternet">Internet</label>
		<input type="checkbox" name="servicios[]"  id="sinternet" value="internet" onclick="internetOpc()">
		<label for="stelefonia">Telefonia</label>
		<input type="checkbox" name="servicios[]" id="stelefonia" value="telefonia" onclick="telefoniaOpc()">
		<label >Cable</label>
		<input type="checkbox" name="servicios[]" id="sclave" value="clave" onclick="cableOpc()" >
		<br><br>

		<label for="internet">Internet:</label><br>
		<input type="number" name="internet" id="internet" step='5' disabled>
		<label for="prec_internet">Precio:</label>
		<input type="number" name="prec_internet" id="prec_internet" style="width: 50px;" step="0.1" disabled><br><br>

		<label for="telefonia">Telefonia:</label><br>
		<label for="telefonia">Minutos de telefonia:</label>
		<select name="telefonia" id="telefonia" disabled  autofocus>
			<option value="200">200</option>
			<option value="500">500</option>
		</select>
		<label for="prec_tel">Precio:</label>
		<input type="number" name="prec_tel" id="prec_tel" style="width: 50px;" step="0.1" disabled>
		<br><br>
		<label>Cable</label>
		<label for="cable">Plan clave:</label>
		<select name="cable" id="cable"   autofocus disabled>
			<option value="paja">paja</option>
			<option value="madera">madera</option>
			<option value="ladrillo">ladrillo</option>
		</select>
		<label for="prec_cable">Precio:</label>
		<input type="number" name="prec_cable" id="prec_cable" style="width: 50px;" step="0.1" disabled>

		<br><br>
		<input type="submit" name="Crear" class="clase1" >
	</form>
		
	


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
				pInternet.setAttribute('required','true');
				internet.setAttribute('required','true');
				
			}else{
				pInternet.setAttribute('disabled','false');
				internet.setAttribute('disabled','false');
				internet.removeAttribute('required');
				pInternet.removeAttribute('required');
			}
			
		}

		function telefoniaOpc(){

			if (telefonia.hasAttribute('disabled') && pTelefono.hasAttribute('disabled')) {

					telefonia.removeAttribute('disabled');
					pTelefono.removeAttribute('disabled');
					telefonia.setAttribute('required','true');
					pTelefono.setAttribute('required','true');
					
			}else{

				telefonia.setAttribute('disabled','false');
				pTelefono.setAttribute('disabled','false');
				telefonia.removeAttribute('required');
				pTelefono.removeAttribute('required');

			}
			
		}

		function cableOpc(){
			if (cable.hasAttribute('disabled') && pCable.hasAttribute('disabled')) {

					cable.removeAttribute('disabled');
					pCable.removeAttribute('disabled');
					cable.setAttribute('required','true');
					pCable.setAttribute('required','true');
					
			}else{

				cable.setAttribute('disabled','false');
				pCable.setAttribute('disabled','false');
				cable.removeAttribute('required');
				pCable.removeAttribute('required');

			}
		}

		
	</script>

@endsection
