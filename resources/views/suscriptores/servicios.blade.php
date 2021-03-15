
@extends('publica')

@section('pageName')
    Home
@endsection

@section('direccion')
	{{route('suscriptores.home2',['usuario'=>$nombre])}}
@endsection

@section('link1')
	Inicio
@endsection

@section('direccion2')
	{{route('suscriptores.servicios',['usuario'=>$nombre])}}
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
	
	 @if ( session('mensaje') )
			<script type="text/javascript">
				alert("{{session('mensaje')}}");
			</script>
	@endif

	
	<section class="left">
		
		<fieldset style="width: 100px">
			<legend >Servicios</legend>
			<ol class="lista" >
				<li><a href="#servicios1" style="color: blue;">1 servicio</a></li>
				<li><a href="#servicios2" style="color: blue;">2 servicios</a></li>
				<li><a href="#servicios3" style="color: blue;">3 servicios</a></li>
			</ol>
		</fieldset>
	</section>

	<section class="clearfl left p_bottom">
		<br><br><h2 class="subTitulo"><a name="servicios1"></a>1 SERVICIO</h2>
		<?php  
			
			if ($muestras->count()) {
				foreach ($muestras as $p) {
					$servicios = explode(' ', $p->categoria);
					$num_serv = count($servicios);
					
					if ($num_serv==1) {
						Imprimir("",$p->nombre,$p->precio,$nombre,$p->categoria);
					}
					
				}
			}		

		?>

	</section>

	
	<section class="clearfl left p_bottom">
		<br><br><h2 class="subTitulo"><a name="servicios2"></a>2 SERVICIOS</h2>
		<?php  
			
			if ($muestras->count()) {
				foreach ($muestras as $p) {
					$servicios = explode(' ', $p->categoria);
					$num_serv = count($servicios);
					
					if ($num_serv==2) {
						Imprimir(2,$p->nombre,$p->precio,$nombre,$p->categoria);
					}
					
				}
			}		

		?>

	</section>

	
	<section class="clearfl left p_bottom">
		<br><br><h2 class="subTitulo"><a name="servicios3"></a>3 SERVICIO</h2>
		<?php  
			
			if ($muestras->count()) {
				foreach ($muestras as $p) {
					$servicios = explode(' ', $p->categoria);
					$num_serv = count($servicios);
					
					if ($num_serv==3) {
						Imprimir(3,$p->nombre,$p->precio,$nombre,$p->categoria);
					}
					
				}
			}		

		?>

	</section>
	</fieldset>

		<?php 

			function Imprimir($tipo_paquete,$nombrep,$precio,$nombre,$servicios){

				$cadena = "<table class=\"paquete".$tipo_paquete."\">
							<thead class=\"titulo".$tipo_paquete."\">
								<tr><th>".strtoupper($nombrep)."
								</th></tr>

							</thead>"."
					
							<tbody>
								<tr><td>
									<form action=\"". route('suscriptores.comprar') ."\" method=\"POST\">
										".csrf_field()."
										<input type=\"hidden\" name=\"usuario\" value=\"".$nombre."\" >
										<input type=\"hidden\" name=\"paquete\" value=\"".$nombrep."\" >
										<input type=\"hidden\" name=\"precio\" value=\"".$precio."\" >
										

										<input title=\"".$servicios."\" type=\"submit\" name=\"Comprar\" value=\"Comprar\" class=\"circulo\" onmouseover=\"Sobre(this)\"  onmouseout=\"Lejos(this)\">
									</form>
									
								</td></tr>
								<tr><td>"
									.$precio." $						
								</td></tr>
							</tbody>

							<tfoot class=\"titulo".$tipo_paquete."\"><tr><td>

								<a  href=\"".route('suscriptores.informacion',['paquete'=>$nombrep,'usuario'=>$nombre])."\">DETALLES</a>
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

