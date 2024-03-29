<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/racks', 'RackController@listar_rack')->name('listar-rack');

Route::get('/equipos-racks{id}', 'RackController@equipos_rack')->name('equipos-rack');

Route::POST('/checklist', 'RackController@checklist')->name('checklist');





