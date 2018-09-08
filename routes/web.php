<?php

Route::get('/','Site\HomeController@index')->name('home');

Route::get('/sitio', 'Site\SitioController@index')->name('sitio');

Route::get('/eventos', 'Site\EventosController@index')->name('eventos');

Route::get('/fotos', 'Site\FotosController@index')->name('fotos');

Route::get('/gastronomia', 'Site\GastronomiaController@index')->name('gastronomia');

Route::get('/localizacao', 'Site\LocalizacaoController@index')->name('localizacao');

Route::get('/login', 'Painel\LoginController@index')->name('login');

Route::get('/logout', 'Painel\LoginController@logout')->name('logout');

Route::post('/login', 'Painel\LoginController@login')->name('auth');

Route::group(['prefix' => 'painel', 'namespace' => 'Painel', 'middleware' => 'logado'],function() {

    Route::get('/', function(){
        return redirect()->route('dash');
    });

    Route::get('/dashboard', 'DashboardController@index')->name('dash');

    // USERS

    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'UserController@index')->name('users');

        Route::get('/edit/{id}', 'UserController@edit')->name('edit');

        Route::get('/delete/{id}', 'UserController@delete')->name('delete');

        Route::get('/new', 'UserController@create')->name('user.create');

        Route::post('/store', 'UserController@store')->name('user.store');
    });

    // FOTOS

    Route::group(['prefix' => 'fotos'], function() {

        Route::get('/', 'FotosController@index')->name('fotos.index');

        Route::get('/new', 'FotosController@create')->name('fotos.create');

        Route::post('/store', 'FotosController@store')->name('fotos.store');

        Route::get('/delete/{id}', 'FotosController@delete')->name('fotos.delete');
    });



});
