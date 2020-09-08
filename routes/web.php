<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::post('/follows/{user}', 'FollowsController@store');

Route::get('/profiles/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profiles/{user}/edit', 'ProfilesController@edit');
Route::patch('/profiles/{user}', 'ProfilesController@update');

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
