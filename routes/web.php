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
Route::get('race', 'App\Http\Controllers\RaceController@index');

// race.addへのルーティング
Route::get('race/add', 'App\Http\Controllers\RaceController@add');
// race.createへのルーティング
Route::post('race/add', 'App\Http\Controllers\RaceController@create');