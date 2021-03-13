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
	
		<h2>1 SERVICIO</h2>
	<section class="clearfl p_bottom">
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

	<h2 class="clearfl p_top">2 SERVICIOS</h2>
	<section >
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

	</section>

	<h2 class="clearfl p_top">3 SERVICIO</h2>
	<section >
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

				$cadena = "<table class=\"paquete".$tipo_paquete."\">
							<thead class=\"titulo".$tipo_paquete."\">
								<tr><th>".$nombrep."
								</th></tr>

							</thead>"."
					
							<tbody>
								<tr><td>
									<form action=\"". route('ingreso') ."\" method=\"GET\">
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

		
		 f
		<script type="text/javascript">
			
			function Elegir(){
				alert("hola");
			}

			function Sobre(punta){
				punta.style.backgroundColor='green';
			}

			function Lejos(punta){
				punta.style.backgroundColor='yellow';
			}
		</script>
	
	
@endsection
