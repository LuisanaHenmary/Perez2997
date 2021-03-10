@if($user->count())
		@foreach($user as $s)
			<p>{{$s->Usuario}}</p>
	@endforeach
@endif