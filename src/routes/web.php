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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts/index', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}/edit', 'PostsController@edit')->where('post', '[0-9]+');
Route::patch('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::delete('/posts/{post}/comments/{comment}', 'CommentsController@destroy');

Auth::routes();

Route::get('/stores/{store}', 'StoresController@show')->where('store', '[0-9]+');
Route::get('/stores/{store}/reserve', 'ReservationsController@reserve')->where('store', '[0-9]+')->middleware('auth');
Route::get('/stores/{store}/reserve/user', 'ReservationsController@user')->where('store', '[0-9]+')->middleware('auth');
Route::post('/stores/{store}/reserve/user', 'ReservationsController@store')->where('store', '[0-9]+')->middleware('auth');

Route::get('/user/reservation', 'ReservationsController@show')->name('user_reservations');
