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

Route::get('lieu', 'PlaceController@index')->name('place.index');

Route::get('lieu/{name?}', 'PlaceController@show')->name('place.show');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
