@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <div class="content">
            <div class="row">
                @if (isset(Auth::user()->id))
                    <create-cupon-component :user="{{ Auth::user() }}"></create-cupon-component>
                    <div class="col-md-6">
                        <h3>Haga click para ver sus codigos promocional</h3>
                        <a href="{{ route('cupones') }}">
                            <button type="button" class="btn btn-info">Ver Cupones</button>
                        </a>
                    </div>
                @else
                    <div class="col-md-12">
                        <h4>Debe estar logueado para poder ver y generar nuestros cupones</h4>
                        <p class="text-center"><a href="{{ route('login') }}">Conectarse</a> | <a href="{{ route('register') }}">Registrarse</a></p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection