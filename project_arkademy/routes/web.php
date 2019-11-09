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

Route::get('/', 'ArkademyController@index');
Route::get('/add', 'ArkademyController@create');
Route::get('/save', 'ArkademyController@store');
Route::get('/edit/{id}', 'ArkademyController@edit');
Route::get('/delete/{id}', 'ArkademyController@destroy');