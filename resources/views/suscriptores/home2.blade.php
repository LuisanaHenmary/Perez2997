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

	@if($compras->count()>0)
		<section class="left">
		<h2>Tus servicios</h2>
		<table class="factura left">
			<thead><tr><th class="compras">Paquete</th><th class="compras">Precio</th><th class="compras">Cancelar</th></tr></thead>
			<tbody>
				<?php  
					$total = 0;
					$clase = "";

				?>

				
				@foreach($compras as $c)
					<form action="{{route('suscriptores.solicitar')}}" method="POST" name="Solicitarcancelacion">
						@csrf
					<?php  
						if ($c->activo == 1) {
							$clase = "compras";
							$solicitud = "cancelar suscripcion";
						}
						if ($c->activo == 0) {
							$clase = "cancelado";
							$solicitud = "deshacer cancelacion";
						}
					?>


					<tr class="{{$clase}}">
						
						<td class="{{$clase}}">{{$c->paquete}}</td>
						
						<td class="{{$clase}}">{{$c->factura}}</td>
						<?php $total+=$c->factura; ?>
						<input type="hidden" name="usuario" value="{{$c->usuario}}">
						<input type="hidden" name="paquete" value="{{$c->paquete}}">
						<td class="{{$clase}}s"><input type="submit" name="Solicitar" value="{{$solicitud}}" class="{{$solicitud}}"></a></td>
					</tr>

					</form>	
				@endforeach
				
			</tbody>
			<tfoot><tr><td>Precio</td><td>total</td><td>{{$total}}</td></tr></tfoot>
		</table>
		</section>
	@endif
		
	

@endsection