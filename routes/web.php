<?php


Route::get('/', 'PagesController@home' );

Route::get('/promociones', 'PagesController@promociones' );

Auth::routes();
