@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Hotelinking</h1>
    <div class="col-6 mt-5"></div>
        <h3>Haga click para obtener una codigo promocional</h2>
        @if (isset(Auth::user()->id))
            <button id="btnguardar" type="button" class="btn btn-primary">Crear Cupón</button>
        @else
            <button id="btnlogin" type="button" class="btn btn-primary">Crear Cupón</button>
        @endif
    <div class="col-6 mt-5" ></div>
        <h3>Haga click para ver sus codigos promocional</h2>
        <a href="/promociones">
            <button type="button" class="btn btn-info" >Ver Cupones</button>
        </a>
</div>
@endsection