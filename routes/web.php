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

//Zones
Route::get('zones/create', 'ZonesController@create')->name('zone.create');
Route::post('zones', 'ZonesController@store')->name('zone.store');
Route::get('zones', 'ZonesController@index')->name('zone.list');
Route::get('zones/{id}/edit', 'ZonesController@edit')->name('zone.edit');
Route::patch('zones/{id}', 'ZonesController@update')->name('zone.update');
Route::post('zones/{id}/delete', 'ZonesController@delete')->name('zone.delete');

//Functional Groups
Route::get('asset-groups/create', 'AssetGroupsController@create')->name('asset-group.create');
Route::post('asset-groups', 'AssetGroupsController@store')->name('asset-group.store');
Route::get('asset-groups', 'AssetGroupsController@index')->name('asset-group.list');
Route::get('asset-groups/{id}/edit', 'AssetGroupsController@edit')->name('asset-group.edit');
Route::patch('asset-groups/{id}', 'AssetGroupsController@update')->name('asset-group.update');
Route::post('asset-groups/{id}/delete', 'AssetGroupsController@delete')->name('asset-group.delete');



Route::get('/home', 'HomeController@index')->name('home');
