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

//Asset Classes
Route::get('asset-classes','AssetClassesController@index')->name('assetClass.list');
Route::get('asset-classes/create','AssetClassesController@create')->name('assetClass.create');
Route::post('asset-classes/store','AssetClassesController@store')->name('assetClass.store');
Route::get('asset-classes/{id}/edit','AssetClassesController@edit')->name('assetClass.edit');
Route::patch('asset-classes/{id}/update','AssetClassesController@update')->name('assetClass.update');
Route::post('asset-classes/{id}/delete','AssetClassesController@destroy')->name('assetClass.delete');

//Asset Subclasses
Route::get('asset-subclasses','AssetSubclassesController@index')->name('assetSubclass.list');
Route::get('asset-subclasses/create','AssetSubclassesController@create')->name('assetSubclass.create');
Route::post('asset-subclasses/store','AssetSubclassesController@store')->name('assetSubclass.store');
Route::get('asset-subclasses/{id}/edit','AssetSubclassesController@edit')->name('assetSubclass.edit');
Route::patch('asset-subclasses/{id}/update','AssetSubclassesController@update')->name('assetSubclass.update');
Route::post('asset-subclasses/{id}/delete','AssetSubclassesController@destroy')->name('assetSubclass.delete');

//Asset Locations
Route::get('locations','LocationsController@index')->name('location.list');
Route::get('locations/create','LocationsController@create')->name('location.create');
Route::post('locations/store','LocationsController@store')->name('location.store');
Route::get('locations/{id}/edit','LocationsController@edit')->name('location.edit');
Route::patch('locations/{id}/update','LocationsController@update')->name('location.update');
Route::post('locations/{id}/delete','LocationsController@destroy')->name('location.delete');

//Asset
Route::get('assets','AssetsController@index')->name('asset.list');
Route::get('assets/create','AssetsController@create')->name('asset.create');
Route::post('assets/store','AssetsController@store')->name('asset.store');
Route::get('assets/{id}/show','AssetsController@show')->name('asset.show');
Route::get('assets/{id}/identification/edit','AssetsController@editAssetIdentification')->name('asset.identification.edit');
Route::patch('assets/{id}/identification/update','AssetsController@updateAssetIdentification')->name('asset.identification.update');
Route::patch('assets/{id}/asset-number/update','AssetsController@updateAssetNumber')->name('asset.number.update');

//Asset Accountability
Route::get('assets/accountability', 'AssetsAccountability@index')->name('accountability');


Route::post('assets/{id}/delete','AssetsController@destroy')->name('asset.delete');


