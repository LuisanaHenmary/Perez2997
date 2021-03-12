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
	
	<section>
		<?php  

			if ($muestras->count()) {
				foreach ($muestras as $p) {
					$servicios = explode(' ', $p->categoria);
					$num_serv = count($servicios);
					
					if ($num_serv==1) {
						Imprimir("",$p->nombre,$p->precio);
					}
					
				}
			}		

		?>

	</section>


	<section>
		<?php  

			if ($muestras->count()) {
				foreach ($muestras as $p) {
					$servicios = explode(' ', $p->categoria);
					$num_serv = count($servicios);
					
					if ($num_serv==2) {
						Imprimir($num_serv,$p->nombre,$p->precio);
					}
					
				}
			}		

		?>

	</section>


	<section>
		<?php  

			if ($muestras->count()) {
				foreach ($muestras as $p) {
					$servicios = explode(' ', $p->categoria);
					$num_serv = count($servicios);
					
					if ($num_serv==3) {
						Imprimir($num_serv,$p->nombre,$p->precio);
					}
					
				}
			}		

		?>

	</section>

		<?php 
			function Imprimir($tipo_paquete,$nombre,$precio){

				$cadena = "<table class=\"paquete".$tipo_paquete."\">
							<thead class=\"titulo".$tipo_paquete."\">
								<tr><th>".$nombre."
								</th></tr>

							</thead>"."
					
							<tbody><tr ><td>".
								"<a href=\"#\" style=\"margin-left: 5px;\" ><p class=\"circulo\" onmouseover=\"Sobre(this)\"  onmouseout=\"Lejos(this)\"></p></a>
								<tr><td>".$precio." $
								</td></tr>
							</td></tr></tbody>

							<tfoot class=\"titulo".$tipo_paquete."\"><tr><td>

								<a  href=\"".route('suscriptores.informacion',['paquete'=>$nombre])."\">DETALLES</a>
							</td></tr></tfoot>
						</table>";
					echo $cadena;



			}

		 ?>

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