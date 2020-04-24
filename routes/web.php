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


Route::get('/', 'Admin\PredenunciaController@index')->name('admin.predenuncia.index');
Route::post('predenuncias', 'Admin\PredenunciaController@store')->name('admin.predenuncias.store');

Route::post('predenuncias/{id}/evidencia', 'Admin\EvidenciaPredenunciaController@store')->name('predenuncias.evidencias.store');
