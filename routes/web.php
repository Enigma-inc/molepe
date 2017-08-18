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
Route::get('assets/{id}/identification','AssetsController@showAssetIdentification')->name('asset.identification');
Route::get('assets/{id}/identification/edit','AssetsController@editAssetIdentification')->name('asset.identification.edit');
Route::patch('assets/{id}/identification/update','AssetsController@updateAssetIdentification')->name('asset.identification.update');
Route::patch('assets/{id}/asset-number/update','AssetsController@updateAssetNumber')->name('asset.number.update');

Route::post('assets/{id}/delete','AssetsController@destroy')->name('asset.delete');

//Asset Accountability
Route::get('assets/accountability', 'AssetsAccountabilityController@index')->name('accountability.list');
Route::get('assets/accountability/create', 'AssetsAccountabilityController@create')->name('accountability.create');
Route::post('assets/accountability/store', 'AssetsAccountabilityController@store')->name('accountability.store');

//Cost Centers
Route::get('assets/accountability/cost-centers', 'CostCentersController@index')->name('cost-center.list');
Route::post('assets/accountability/cost-centers/store', 'CostCentersController@store')->name('cost-center.store');
Route::get('assets/accountability/cost-centers/{id}/edit', 'CostCentersController@edit')->name('cost-center.edit');
Route::patch('assets/accountability/cost-centers/{costCenter}/update', 'CostCentersController@update')->name('cost-center.update');
Route::post('assets/accountability/cost-centers/{id}/delete', 'CostCentersController@destroy')->name('cost-center.delete');

//Custodians
Route::get('assets/accountability/custodians', 'CustodiansController@index')->name('custodian.list');
Route::post('assets/accountability/custodians/store', 'CustodiansController@store')->name('custodian.store');
Route::get('assets/accountability/custodians/{id}/edit', 'CustodiansController@edit')->name('custodian.edit');
Route::patch('assets/accountability/custodians/{custodian}/update', 'CustodiansController@update')->name('custodian.update');
Route::post('assets/accountability/custodians/{id}/delete', 'CustodiansController@destroy')->name('custodian.delete');

//Departments
Route::get('assets/accountability/departments', 'DepartmentsController@index')->name('department.list');
Route::post('assets/accountability/departments/store', 'DepartmentsController@store')->name('department.store');
Route::get('assets/accountability/departments/{id}/edit', 'DepartmentsController@edit')->name('department.edit');
Route::patch('assets/accountability/departments/{department}/update', 'DepartmentsController@update')->name('department.update');
Route::post('assets/accountability/departments/{id}/delete', 'DepartmentsController@destroy')->name('department.delete');

//Sections
Route::get('assets/accountability/sections', 'SectionsController@index')->name('section.list');
Route::post('assets/accountability/sections/store', 'SectionsController@store')->name('section.store');
Route::get('assets/accountability/section/{id}/edit', 'SectionsController@edit')->name('section.edit');
Route::patch('assets/accountability/sections/{section}/update', 'SectionsController@update')->name('section.update');
Route::post('assets/accountability/section/{id}/delete', 'SectionsController@destroy')->name('section.delete');



