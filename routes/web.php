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
<<<<<<< HEAD

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



=======
>>>>>>> e9f23dcb5acd864436e2eb3a1bbe817fa9cf135d
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

Route::get('assets/locations','LocationsController@index')->name('locations.list');
Route::get('assets/locations/create','LocationsController@create')->name('location.create');
Route::post('assets/locations/store','LocationsController@store')->name('location.store');
Route::get('assets/locations/{id}/edit','LocationsController@edit')->name('location.edit');
Route::patch('assets/locations/{id}/update','LocationsController@update')->name('location.update');
Route::post('assets/locations/{id}/delete','LocationsController@destroy')->name('location.delete');



