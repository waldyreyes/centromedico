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

Route:: resource('antecedentes', 'AntecedentController')->names('antecedentes');

// Route::get('paciente', function () {
//     return view('pacientes.index');
// })->name('verpacientes');


// Route::get('paciente/create', function () {
//     return view('pacientes.create');
// })->name('crearpaciente');

// Route::get('expediente', function () {
//     return view('expedientes.index');
// })->name('verexpedientes');


// Route::get('antecedente/create', function () {
//     return view('antecedente.create');
// })->name('crearexpedientes');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
