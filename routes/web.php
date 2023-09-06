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

Route::get('/', 'App\Http\Controllers\PetsController@index')->name('pets.index');
Route::get('/create', 'App\Http\Controllers\PetsController@create')->name('pets.create');
Route::post('/save', 'App\Http\Controllers\PetsController@save')->name('pets.save');
Route::get('/list', 'App\Http\Controllers\PetsController@list')->name('pets.list');
Route::get('/statistics', 'App\Http\Controllers\PetsController@statistics')->name('pets.statistics');
