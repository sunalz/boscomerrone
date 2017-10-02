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
Route::get('/contact', 'PagesController@getContact');
Route::post('/contact', 'PagesController@postContact');

Route::get('albums', 'AlbumsController@index');
Route::get('/albums/{id}', 'AlbumsController@show');
Route::get('/create', 'AlbumsController@create');
Route::post('/albums/store', ['as' => 'album-store', 'uses' => 'AlbumsController@store']);

Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('photos/store', 'PhotosController@store');
Route::get('/photos/{id}', 'PhotosController@show');
Route::delete('/photos/{id}', 'PhotosController@destroy');
Route::delete('/albums/{id}', ['as' =>'album-delete', 'uses' =>'AlbumsController@destroy']);

Route::resource('posts', 'PostController');
Route::get('/editor', 'PostController@index');
Route::get('/post/{id}', 'PostController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
