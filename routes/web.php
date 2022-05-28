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

Route::get('/', 'MyPlaceController@index');

Route::get('/a', 'MyPlaceA@a');

Route::get('/b', 'MyPlaceB@b');

Route::get('/c', 'MyPlaceC@c');

Route::get('/d', 'MyPlaceD@d');