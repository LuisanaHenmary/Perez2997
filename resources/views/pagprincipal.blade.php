@extends('publica')

@section('pageName')
    Principal
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

	<section class="left">
		
		<fieldset style="width: 200px">
			<legend >Servicios</legend>
			<ol class="lista" style="width: 200px" >
				<li><a href="#servicios1" style="color: blue;">1 SERVICIOS</a></li>
				<li><a href="#servicios2" style="color: blue;">2 SERVICIOS</a></li>
				<li><a href="#servicios3" style="color: blue;">3 SERVICIOS</a></li>
			</ol>
		</fieldset>
	</section>
	
	<section class="clearfl left ">
		<br><br><h2 class="subTitulo"><a name="servicios1"></a>
		1 SERVICIO</h2>
		<?php  
			
			if ($muestras->count()) {
				foreach ($muestras as $p) {
					$servicios = explode(' ', $p->categoria);
					$num_serv = count($servicios);
					
					if ($num_serv==1) {
						Imprimir("",$p->nombre,$p->precio,$p->categoria);
					}
					
				}
			}		

		?>

	</section>

	
	<section class="clearfl left ">
		<br><br><h2 class="subTitulo"><a name="servicios2"></a>2 SERVICIOS</h2>
		<?php  
			
			if ($muestras->count()) {
				foreach ($muestras as $p) {
					$servicios = explode(' ', $p->categoria);
					$num_serv = count($servicios);
					
					if ($num_serv==2) {
						Imprimir(2,$p->nombre,$p->precio,$p->categoria);
					}
					
				}
			}		

		?>

	</section >

	
	<section class="clearfl left ">
		<br><br><h2 class="subTitulo"><a name="servicios3"></a>3 SERVICIOS</h2>
		<?php  
			
			if ($muestras->count()) {
				foreach ($muestras as $p) {
					$servicios = explode(' ', $p->categoria);
					$num_serv = count($servicios);
					
					if ($num_serv==3) {
						Imprimir(3,$p->nombre,$p->precio,$p->categoria);
					}
					
				}
			}		

		?>

	</section>


		<?php 

			function Imprimir($tipo_paquete,$nombrep,$precio,$servicios){

				$cadena = "<table class=\"paquete".$tipo_paquete." p_bottom\">
							<thead class=\"titulo".$tipo_paquete."\">
								<tr><th>".strtoupper($nombrep)."
								</th></tr>

							</thead>"."
					
							<tbody>
								<tr><td>
									<form action=\"". route('ingreso') ."\" method=\"GET\" name=\"VistaPrevia\">
										".csrf_field()."
										<input title=\"".$servicios."\" type=\"submit\" name=\"Comprar\" value=\"Comprar\" class=\"circulo\" onmouseover=\"Sobre(this)\"  onmouseout=\"Lejos(this)\">
									</form>
									
								</td></tr>
								<tr><td>"
									.$precio." $						
								</td></tr>
							</tbody>

							<tfoot class=\"titulo".$tipo_paquete."\"><tr><td>

								<a  href=\"".route('ingreso')."\">DETALLES</a>
							</td></tr></tfoot>
						</table>";
					echo $cadena;



			}

		 ?>

		
		 
		<script type="text/javascript">

			function Sobre(punta){
				punta.style.backgroundColor='rgba(29,240,79,0.9)';
			}

			function Lejos(punta){
				punta.style.backgroundColor='rgba(234,190,63,1)';
			}
		</script>
	
	
@endsection
