<?php


Route::get('/', 'PagesController@home' );

Route::get('/promociones', 'PagesController@promociones' );

Auth::routes();

Route::get('/insertar', function () {
    return view('/insertar');
});