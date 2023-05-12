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

// horse.editへのルーティング
Route::get('horse/{id}/edit', 'App\Http\Controllers\HorseController@edit')->name('horse.edit');
// horse.updateへのルーティング
Route::post('horse/{id}', 'App\Http\Controllers\HorseController@update')->name('horse.update');