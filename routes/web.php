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

Route::get('/user/{id}', ['uses' => 'UserController@show', 'as' => 'showuser']);
Route::get('users/{id}/edit',  ['as' => 'editUser', 'uses' => 'UserController@edit']);
Route::put('users/{id}',  ['as' => 'updateUser', 'uses' => 'UserController@update']);


Route::get('/story/show/{id}', ['uses' => 'StoryController@show', 'as' => 'showstory']);
Route::get('/story/create', ['uses' => 'StoryController@create', 'as' => 'createstory']);
Route::post('/story/create', ['uses' => 'StoryController@postCreate', 'as' => 'postCreate']);
Route::get('/story/delete/{id}', ['uses' => 'StoryController@delete', 'as' => 'deleteStory']);
Route::post('/story/like', ['uses' => 'StoryController@like', 'as' =>'likeStory']);
Route::post('/story/flag', ['uses' => 'StoryController@flag', 'as' => 'flagStory']);


Route::get('/city', ['uses' => 'CityController@show', 'as' => 'showcity']);


Route::get('/yourworld', ['uses' => 'UserController@yourWorld', 'as' => 'yourWorld']);
Route::post('/yourworld', ['uses' => 'FlightController@create', 'as' => 'flightCreate']);
Route::get('/yourstats', ['uses' => 'UserController@yourStats', 'as' => 'yourStats']);
Route::get('/yourstories', ['uses' => 'UserController@yourStories', 'as' => 'yourStories']);
Route::post('/city', ['uses' => 'CityController@show', 'as' => 'showCity']);


Route::post('/register', ['uses' => 'Auth\RegisterController@create', 'as' => 'register']);
Route::post('/login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);
Route::get('/logout', ['uses' => 'Auth\AuthController@logout', 'as' => 'logout']);

Route::get('/admin/show', ['uses' => 'AdminController@show', 'as' => 'showAdmin']);
Route::post('/admin/delete', ['uses' => 'AdminController@delete', 'as' => 'adminDeleteStory']);
Route::put('/admin/reset', ['uses' => 'AdminController@resetFlags', 'as' => 'adminResetFalgs']);
Route::get('/impressum', ['uses' => 'HomeController@impressum', 'as' => 'showImpressum']);







