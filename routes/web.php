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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/cliente', 'ClienteController');
Route::resource('/asistencia', 'asistenciaController');

Route::get('/tablas', 'TaskController')->name('tablas');
 
Route::get('/tablas/tasks', 'GetTaskController')->name('datatable.tasks');

Route::name('print')->get('/imprimir', 'GeneradorController@imprimir');


