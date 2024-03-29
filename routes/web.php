<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// race.indexへのルーティング
Route::get('race', 'App\Http\Controllers\RaceController@index')->name('race.index');

// race.addへのルーティング
Route::get('race/add', 'App\Http\Controllers\RaceController@add')->name('race.add');
// race.createへのルーティング
Route::post('race/add', 'App\Http\Controllers\RaceController@create');

// horse.indexへのルーティング
Route::get('horse', 'App\Http\Controllers\HorseController@index')->name('horse.index');

// horse.addへのルーティング
Route::get('horse/add', 'App\Http\Controllers\HorseController@add')->name('horse.add');
// horse.createへのルーティング
Route::post('horse/add', 'App\Http\Controllers\HorseController@create');

// horse.add_allへのルーティング
Route::get('horse/add_all', 'App\Http\Controllers\HorseController@addAll')->name('horse.add_all');
// horse.create_allへのルーティング
Route::post('horse/add_all', 'App\Http\Controllers\HorseController@createAll')->name('horse.create_all');

// horse.editへのルーティング
Route::get('horse/{id}/edit', 'App\Http\Controllers\HorseController@edit')->name('horse.edit');
// horse.edit_allへのルーティング
Route::get('horse/{race_id}/edit_all', 'App\Http\Controllers\HorseController@editAll')->name('horse.edit_all');

// horse.updateへのルーティング
Route::post('horse/{id}', 'App\Http\Controllers\HorseController@update')->name('horse.update');
// horse.update_allへのルーティング
Route::post('horse/{id}/update_all', 'App\Http\Controllers\HorseController@updateAll')->name('horse.update_all');

// horse.graphへのルーティング
Route::get('horse/graph', 'App\Http\Controllers\HorseController@graph')->name('horse.graph');