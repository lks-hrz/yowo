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

Route::get('/', ['uses' => 'HomeController@root', 'as' => 'root']);
Route::get('/home', ['uses' => 'HomeController@home', 'as' => 'home']);

Route::get('/story', ['uses' => 'StoryController@show', 'as' => 'showstory']);
Route::get('/city', ['uses' => 'CityController@show', 'as' => 'show']);
