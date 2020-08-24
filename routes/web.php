<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'ControladorFilial@index')->name('home');
Route::get('/filiais/novo', 'ControladorFilial@create');
Route::post('/filiais', 'ControladorFilial@store');
Route::post('/filiais/{id}', 'ControladorFilial@update');
Route::get('/filiais/editar/{id}', 'ControladorFilial@edit');
Route::get('/filiais/apagar/{id}', 'ControladorFilial@destroy');
