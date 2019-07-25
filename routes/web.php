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

Route::get('users/register','Auth\RegisterController@show');
Route::post('users/register','Auth\RegisterController@register');

Route::get('users/logout','Auth\LoginController@logout');

Route::get('users/login','Auth\LoginController@show');
Route::post('users/login','Auth\LoginController@login');

Route::group(array('middleware'=>'auth'),function(){
	Route::post('comment/create','CommentController@store');
});

// ************Post***************
Route::group(array('prefix'=>'postcreator','namespace'=>'postcreator','middleware'=>'postware'),function(){
	Route::get('post/create','PostController@create');
	Route::post('post/create','PostController@store');
	Route::get('post','PostController@index');

	Route::get('post/{id}/edit','PostController@edit');
	Route::post('post/{id}/edit','PostController@update');

	Route::get('post/{id}/show','PostController@show');
});
// ************End Post**********

Route::group(array('prefix'=>'admin','namespace'=>'admin','middleware'=>'manager'),function(){

	Route::get('/','AdminController@index');


	Route::get('users','UserController@index');
	Route::get('users/{id}/edit','UserController@edit');
	Route::post('users/{id}/edit','UserController@update');

	Route::get('roles','RoleController@index');
	Route::get('roles/create','RoleController@create');
	Route::post('roles/create','RoleController@store');

	// **********Categories******
	Route::get('category','CategoryController@index');
	Route::get('category/create','CategoryController@create');
	Route::post('category/create','CategoryController@store');
	Route::get('category/{id}/edit','CategoryController@edit');
	Route::post('category/{id}/edit','CategoryController@update');
	// **********end Categories*****
});