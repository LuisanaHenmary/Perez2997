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


	@if($solicitudes->count()>0)

		<section class="left">
		<h2>Solicitudes de cancelacion de suscripcion</h2>
		<table class="factura">
			<thead><tr><th class="compras">Paquete</th><th class="compras">Usuario</th><th class="compras">Cancelar</th></tr></thead>
			<tbody>
			
				
				@foreach($solicitudes as $c)
					<form  method="POST" action="{{route('administrador.borrar')}}" name="Borrador">
						@csrf
			
					<tr class="compras">
						
						<td class="compras">{{$c->paquete}}</td>
						
						<td class="compras">{{$c->usuario}}</td>
						<input type="hidden" name="usuario" value="{{$c->usuario}}">
						<input type="hidden" name="paquete" value="{{$c->paquete}}">
					
						<td class="compras"><input type="submit" name="eliminar" value="eliminar" class="cancelar"></a></td>
					</tr>

					</form>	
				@endforeach
				
			</tbody>
		</table>
		</section>
	@endif
	

	
@endsection
