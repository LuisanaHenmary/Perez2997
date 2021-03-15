@extends('publica')

@section('pageName')
    Informacion del Paquete
@endsection

@section('direccion')
	{{route('suscriptores.servicios',['usuario'=>$nombre])}}
@endsection

@section('link1')
	Regresar
@endsection

@section('contenido')
	 @if ( session('mensaje') )
			<script type="text/javascript">
				alert("{{session('mensaje')}}");
			</script>
	@endif
	<div class="centerleft">
		

		@if($buscar->count() && $canales->count())
			
			@foreach($buscar as $p)		
			
				<table class="factura">

					<thead  ><tr ><th>Paquete {{$p->nombre}}</th><th >Contenido</th><th>Precio</th></tr></thead>
					<tbody >

						@if($p->internet > 0)
							<tr style=" border: 2px solid black;">
								<td > Internet:</td>
								<td>{{$p->internet}}</td>
								<td>{{$p->pInternet}}</td>
							</tr>
						@endif

						@if($p->minutosTelefonia > 0)
							<tr style=" border: 2px solid black;">

								<td>Minutos de Telefonia:</td>
								<td>{{$p->minutosTelefonia}}</td>
								<td>{{$p->pTelefonia}}</td>
							</tr>
						@endif

						@if($p->planCable != '')
							<tr style=" border: 2px solid black;">
								<td >Plan de clave: </td>
								<td>
									{{$p->planCable}}<br>
									<fieldset>
										<legend>Canales</legend>
										<ul style="list-style-type:none;">
										@foreach($canales as $c)
											<?php $pos = strpos($c->plan, $p->planCable) ?>
							
											@if($pos!==false)
												<li>{{$c->nombreCanal}} <a style="color: blue;" target="_BLANK" href="{{$c->link}}"> horario</a></li>

											@endif
										@endforeach
										</ul>
									</fieldset>
									

								</td>
										
								<td>{{$p->pCable}}</td>
							</tr >
						
						@endif

					</tbody>
					<tfoot>
						<tr >
							<td>Precio total</td>
							<td  style=" border-right: 2px solid black;">{{$p->precio}} $</td>
							<td><form method="POST" action="{{ route('suscriptores.comprar')}}" name="Comprar">
								@csrf
								<input type="hidden" name="usuario" value="{{$nombre}}" >
								<input type="hidden" name="paquete" value="{{$p->nombre}}">
								<input type="hidden" name="precio" value="{{$p->precio}}">
								<input type="submit" name="Comprar" value="Comprar" class="boton" onmouseover="Sobre(this)"  onmouseout="Lejos(this)">
							</form></td>
						</tr>
						

					</tfoot>
				</table>
			
			@endforeach
		@endif


	</div>

	
	
@endsection