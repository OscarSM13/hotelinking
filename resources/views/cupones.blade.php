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
	@if (isset(Auth::user()->id))
		<div class="col-12">
			<table width=50% cellpadding="9">
				<tr>
					<th>Nº de codigo</th>
					<th>Status</th>
				</tr>
					@forelse($codes as $code)

						@if ($code['user_id'] ==  Auth::user()->id )	
							@if ($code['status'] == 1)
							<tr>
								<td id="parrafo">{{ $code['uuid'] }}</td>
								<td><button class="btnactivado">Activar</button></td>
							</tr>
							@else
								<tr>
									<td>{{ $code['uuid'] }}</th>
									<td> <button disabled="ture">Activado</button></td>
								</tr>
							@endif
						@endif
					@empty
					<p>No tienes ningun cupon ve a la <a href="/">Home</a> para poder crearlos</p>
					@endforelse
			</table>
	@else
			<p>Tienes que <a href="/login"> Iniciar sesión</a> para poder ver los codigos</p>
	@endif
	</div>
	
</div>
@endsection