<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'StadiumController@index');

Auth::routes();

Route::resource('stadium', 'StadiumController', ['only' => ['index']]);
Route::resource('match', 'MatchController', ['only' => ['show']]);
Route::resource('room', 'RoomController', ['only' => ['show']]);