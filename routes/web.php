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

// get list of tasks
Route::get('/museu','MuseusController@index');
// get specific task
Route::get('/museu/{id}','MuseusController@show');
// create new task
Route::get('/museu/nome/{nome}','MuseusController@byName');
// create new task
Route::get('/museu/api/{api}','MuseusController@byApi');
// create new task
Route::get('/museu/tematica/{tematica}','MuseusController@byTematica');
// update existing task
Route::put('/museu','MuseusController@store');
// delete a task
Route::delete('/museu/{id}','MuseusController@destroy');


