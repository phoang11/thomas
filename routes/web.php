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

Route::get('/', 'BasicPageController@home')->name('home');
Route::get('/{id}', 'BasicPageController@show');

Route::get('/students', 'StudentController@index');
Route::post('/student', 'StudentController@store');
Route::delete('/student/{student}', 'StudentController@destroy');
Route::get('/student/{student}', 'StudentController@show');
Route::get('/student/{student}/edit', 'StudentController@change');
Route::post('/student/{student}/update', 'StudentController@update');
