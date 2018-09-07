<?php

Route::get('/','Site\HomeController@index')->name('home');

Route::get('/sitio', 'Site\SitioController@index')->name('sitio');

Route::get('/eventos', 'Site\EventosController@index')->name('eventos');

Route::get('/fotos', 'Site\FotosController@index')->name('fotos');

Route::get('gastronomia', 'Site\GastronomiaController@index')->name('gastronomia');

Route::get('localizacao', 'Site\LocalizacaoController@index')->name('localizacao');
