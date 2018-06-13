<?php

/*
    Rutas con su nombre de las vistas llamando a su controlador
*/

Route::name('generateCupon')->post('/generateCupon', 'ApiController@generateCupon');
Route::name('validateCupon')->post('/validateCupon', 'ApiController@validateCupon');
