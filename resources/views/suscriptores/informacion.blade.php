@extends('publica')

@section('pageName')
    Home
@endsection

@section('direccion')
	{{route('suscriptores.servicios')}}
@endsection

@section('link1')
	Regresar
@endsection

@section('contenido')

	<div class="centerleft">
		

		@if($buscar->count())
			@foreach($buscar as $p)		
				<p>{{$p->nombre}}</p>

				@if($p->internet > 0)
					<p>Internet: <span>{{$p->internet}}</span></p>
				@endif
			
				@if($p->minutosTelefonia > 0)
					<p>Telefonia: <span>{{$p->minutosTelefonia}} minutos</span></p>
				@endif

				@if($p->planCable != '')
					<p>Plan de clave: <span>{{$p->planCable}}</span></p>
				@endif
			
			@endforeach
		@endif


	</div>

	
	
@endsection