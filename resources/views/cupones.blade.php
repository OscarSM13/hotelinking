@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Promociones</h1>
    </div>
        @if (isset(Auth::user()->id))
            <div class="row" class="mb-4">
                <div class="col-md-3">
                    <h4>Nº de Código</h4>
                </div>
                <div class="col-md-3 text-right">
                    <h4>Status</h4>
                </div>
                <div class="col-md-3">
                    <h4>Nº de Código</h4>
                </div>
                <div class="col-md-3 text-right">
                    <h4>Status</h4>
                </div>
            </div>

            <hr>

            <div class="row">
            @forelse($codes as $code)
                <div class="col-6" style="margin-bottom: 20px;">
                    <p class="d-inline">{{ $code['uuid'] }}</p>
                    <validate-cupon-component :cupon="{{ $code }}"></validate-cupon-component>
                </div>
            @empty
                <p>No tienes ningun cupon ve a la <a href="{{ route('home') }}">Home</a> para poder crearlos</p>
            @endforelse
            </div>
        @else
            <p>Tienes que <a href="{{ route('login') }}"> Iniciar sesión</a> para poder ver los codigos</p>
        @endif
@endsection