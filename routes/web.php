<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/procedimento', 'App\Http\Controllers\ProcedimentoController');

Route::get('delete',      'App\Http\Controllers\GrupoController@destroy');
Route::get('update',      'App\Http\Controllers\GrupoController@edit');
Route::get('create',      'App\Http\Controllers\GrupoController@create');
Route::get('grupoindex',  'App\Http\Controllers\GrupoController@index');
Route::resource('/grupo', 'App\Http\Controllers\GrupoController');

Route::get('delete',       'App\Http\Controllers\AgendaController@destroy');
Route::get('update',       'App\Http\Controllers\AgendaController@edit');
Route::get('create',       'App\Http\Controllers\AgendaController@create');
Route::get('agendaindex',  'App\Http\Controllers\AgendaController@index');
Route::resource('/agenda', 'App\Http\Controllers\AgendaController');

Route::get('delete',         'App\Http\Controllers\PacienteController@destroy');
Route::get('update',         'App\Http\Controllers\PacienteController@edit');
Route::get('create',         'App\Http\Controllers\PacienteController@create');
Route::get('pacienteindex',  'App\Http\Controllers\PacienteController@index');
Route::resource('/paciente', 'App\Http\Controllers\PacienteController');

Route::get('apagamunicipio', 'App\Http\Controllers\MunicipioController@destroy');
Route::get('criamunicipio',  'App\Http\Controllers\MunicipioController@create');
Route::get('municipioindex', 'App\Http\Controllers\MunicipioController@index');
Route::resource('municipio', 'App\Http\Controllers\MunicipioController');

Route::get('/', function () {
    return view('welcome');
});