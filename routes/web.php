<?php

/*
    Rutas con su nombre de las vistas llamando a su controlador
*/
Route::name('home')->get('/', 'PagesController@home');
Route::name('cupones')->get('/cupones', 'PagesController@cupones');

Auth::routes();
