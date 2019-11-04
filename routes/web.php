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
Route::get('/places', 'PlaceController@index')->name('place.index');

//Affichage liste lieux par catégories
Route::get('/places/{name}', 'PlaceController@indexByCategory')->name('place.index');

//Affichage d'un seul lieu
Route::get('lieu/{name?}', 'PlaceController@showPlace')->name('place.show');

//Affichage création lieu
Route::get('/createPlace', 'PlaceController@createPlace')->name('place.create')->middleware('auth');

//Enregistrement lieu créé
Route::post('/storePlace', 'PlaceController@storePlace')->name('place.store')->middleware('auth');

//Mise à jour du lieu
Route::get('/updatePlace/{id}', 'PlaceController@edit')->name('place.edit')->middleware('auth');
Route::put('/updatePlace/{place}', 'PlaceController@update')->name('place.update')->middleware('auth');

//Affichage du profil user
Route::get('user/{id}', 'UserController@showProfil')->name('user.show');

//images
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('imageUpload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('imageUploadPost');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


//ROUTE TEST

