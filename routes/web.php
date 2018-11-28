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

//Exercise ONE
Route::get('show/temp', [
  'uses' => 'DataTempsController@index',
  'as' => 'inscripcion'
]);

//Exercise TWO
Route::get('show/football', [
  'uses' => 'DataFootballController@index',
  'as' => 'inscripcion'
]);
