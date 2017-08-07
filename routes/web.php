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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('assets/assetclasses','AssetClassesController@index')->name('assetclasses.list');
Route::get('assets/assetclasses/create','AssetClassesController@create')->name('assetclass.create');
Route::post('assets/assetclasses/store','AssetClassesController@store')->name('assetclass.store');
Route::get('assets/assetclasses/{id}/edit','AssetClassesController@edit')->name('assetclass.edit');
Route::patch('assets/assetclasses/{id}/update','AssetClassesController@update')->name('assetclass.update');
Route::post('assets/assetclasses/{id}/delete','AssetClassesController@destroy')->name('assetclass.delete');

Route::get('assets/assetsubclasses','AssetSubclassesController@index')->name('assetsubclasses.list');
Route::get('assets/assetsubclasses/create','AssetSubclassesController@create')->name('assetsubclass.create');
Route::post('assets/assetsubclasses/store','AssetSubclassesController@store')->name('assetsubclass.store');
Route::get('assets/assetsubclasses/{id}/edit','AssetSubclassesController@edit')->name('assetsubclass.edit');
Route::patch('assets/assetsubclasses/{id}/update','AssetSubclassesController@update')->name('assetsubclass.update');
Route::post('assets/assetsubclasses/{id}/delete','AssetSubclassesController@destroy')->name('assetsubclass.delete');



