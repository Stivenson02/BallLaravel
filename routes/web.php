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


Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@show');
Route::get('inscripcion/{id}', [
  'uses' => 'HomeController@inscripcion',
  'as' => 'inscripcion'
]);
Route::post('create', [
  'uses' => 'MateriaController@create',
  'as' => 'create_materia_path'
]);
Route::post('inscrip', [
  'uses' => 'MateriaController@store',
  'as' => 'inscrip_materia_path'
]);
Route::get('show_register/{id}', [
  'uses' => 'MateriaController@show',
  'as' => 'show_register_path'
]);

Route::post('edit', [
  'uses' => 'MateriaController@edit',
  'as' => 'edit_register_path'
]);

Route::post('delet', [
  'uses' => 'MateriaController@destroy',
  'as' => 'delet_register_path'
]);
