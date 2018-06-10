@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Hotelinking</h1>
    <div class="col-6 mt-5"></div>
        <h3>Haga click para obtener una codigo promocional</h2>
        <button type="submit" class="btn btn-primary">Crear Cupón</button>
    <div class="col-6 mt-5" ></div>
        <h3>Haga click para ver sus codigos promocional</h2>
        <a href="/promociones">
            <button type="button" class="btn btn-info" >Ver Códigos</button>
        </a>
</div>
@endsection