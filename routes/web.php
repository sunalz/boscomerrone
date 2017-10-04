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
Route::get('/create', 'AlbumsController@create')->middleware('auth');
Route::post('/albums/store', ['as' => 'album-store', 'uses' => 'AlbumsController@store']);

Route::get('/photos/create/{id}', 'PhotosController@create')->middleware('auth');
Route::post('photos/store', 'PhotosController@store');
Route::get('/photos/{id}', 'PhotosController@show');
Route::delete('/photos/{id}', 'PhotosController@destroy');
Route::delete('/albums/{id}', ['as' =>'album-delete', 'uses' =>'AlbumsController@destroy']);

Route::resource('posts', 'PostController');
Route::get('/editor', 'PostController@index');
Route::get('/post/{id}', 'PostController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//events

Route::resource('events', 'EventController');
Route::resource('eventphotos', 'EventphotosController');
Route::get('/events', 'EventController@index');
Route::get('/events/create','EventController@create')->middleware('auth');
Route::post('/events/store', ['as' => 'create-event', 'uses' => 'EventController@store']);
Route::get('/events/{id}', ['as' =>'event', 'uses' => 'EventController@show']);

//photo upload

Route::post('/eventphotos/store', ['as' => 'photo-upload', 'uses' => 'EventphotosController@store']);
Route::get('/events/photoupload/create/{event_id}' , 'EventphotosController@create')->middleware('auth');

// edit events
Route::get('/event/edit/{id}','EventController@edit')->middleware('auth');

// event photos

Route::get('/event/photos','EventphotosController@index')->middleware('auth');
Route::get('/event/photos/{id}','EventphotosController@show');
