@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
	<h1>Promociones</h1>
	<nav>
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a href="/">
					<button type="button" class="btn btn-info" >Home</button>
				</a>
			</li>
		</ul>
	</nav>
</div>
<div class="row">
<p class="card-text">
	@if (isset(Auth::user()->id))
		<div class="col-6">
			@forelse($codes as $code)

				@if ($code['user_id'] ==  Auth::user()->id )	
				
					<p>{{ $code['code'] }} 
						<button>Activar</button>
					</p>
					
				@endif
				@if ( $code['user_id'] !=  Auth::user()->id )
				<p>No tienes ningun cupon ve a la <a href="/">Home</a> para poder crearlos</p>
			@endif
			@empty
			@endforelse
			
	@else
			<p>Tienes que loguearte para poder ver los codigos</p>
	@endif
	</div>
	
</div>
@endsection