<?php


Route::name('home')->get('/', 'PagesController@home');
Route::name('cupones')->get('/cupones', 'PagesController@cupones');

Auth::routes();
