<?php


Route::get('/', 'PagesController@home' );

Route::get('/promociones', 'PagesController@promociones' );


Route::post('/insertar', function () {
    return view('/layouts/insertar');
});
Route::post('/desactivar', function () {
    return view('/layouts/desactivar');
});

Auth::routes();
