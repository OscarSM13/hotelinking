<?php


Route::get('/', 'PagesController@home' );

Route::get('/promociones', 'PagesController@promociones' );


Route::get('/insertar', function () {
    return view('/layouts/insertar');
});
Route::get('/desactivar', function () {
    return view('/layouts/desactivar');
});

Auth::routes();
