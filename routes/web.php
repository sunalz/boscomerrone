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

Route::get('/', 'PagesController@getIndex');
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::get('gallery', 'AlbumsController@index');
Route::get('/gallery/{id}', 'AlbumsController@show');
Route::get('create', 'AlbumsController@create');
Route::post('store', 'AlbumsController@store');
Route::get('photos/{id}', 'PhotosController@create');
Route::post('photos/store', 'PhotosController@store');
