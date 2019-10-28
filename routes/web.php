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

//Affichage liste lieux
Route::get('lieu', 'PlaceController@index')->name('place.index');

//Affichage d'un lieu
Route::get('lieu/{name?}', 'PlaceController@show')->name('place.show');

//Affichage profil user
Route::get('user/{id?}', 'UserController@show')->name('user.show');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
