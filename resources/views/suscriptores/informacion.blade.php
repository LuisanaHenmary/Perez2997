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

	<div class="centerleft">


		@if($buscar->count() && $canales->count())
			
			@foreach($buscar as $p)		
			
				<table class="factura">

					<thead  ><tr ><th>Paquete</th><th >{{$p->nombre}}</th></tr></thead>
					<tbody >

						@if($p->internet > 0)
							<tr style=" border: 2px solid black;">
								<td > Internet:</td>
								<td>
									{{$p->internet}}	
								</td>
							</tr>
						@endif

						@if($p->minutosTelefonia > 0)
							<tr style=" border: 2px solid black;">

								<td>Minutos de Telefonia:</td>
								<td>
									{{$p->minutosTelefonia}}  
								</td>
							</tr>
						@endif

						@if($p->planCable != '')
							<tr style=" border: 2px solid black;">
								<td >Plan de clave:</td>
								<td>{{$p->planCable}}</td>
										
							
							</tr >
							<tr style=" border: 2px solid black;">
								<td>Canales:</td>
								<td>
									<ul style="list-style-type:none;">
										@foreach($canales as $c)
											<?php $pos = strpos($c->plan, $p->planCable) ?>
							
											@if($pos!==false)
												<li>{{$c->nombreCanal}} <a style="color: blue;" target="_BLANK" href="{{$c->link}}"> horario</a></li>

											@endif
										@endforeach
									</ul>
								</td>
							</tr>
						@endif

					</tbody>
					<tfoot>
						<tr style=" border: 2px solid black;">
							<td>Precio:</td>
							<td>{{$p->precio}} $</td>
						</tr>
						

					</tfoot>
				</table>
			
			@endforeach
		@endif


	</div>

	
	
@endsection