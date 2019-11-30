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

Route::middleware(['auth'])->group(function () {
	//Roles
	//1
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('can:permission:roles.create');
	//2
	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('can:permission:roles.index');
	//3
	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('can:permission:roles.create');
	//4
	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('can:permission:roles.edit');
	//5
	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('can:permission:roles.show');
	//6
	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('can:permission:roles.destroy');
	//7
	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('can:permission:roles.edit');

	//Products
	//1
	Route::post('products/store', 'ProductController@store')->name('products.store')
		->middleware('can:permission:products.create');
	//2
	Route::get('products', 'ProductController@index')->name('products.index')
		->middleware('can:permission:products.index');
	//3
	Route::get('products/create', 'ProductController@create')->name('products.create')
		->middleware('can:permission:products.create');
	//4
	Route::put('products/{product}', 'ProductController@update')->name('products.update')
		->middleware('can:permission:products.edit');
	//5
	Route::get('products/{product}', 'ProductController@show')->name('products.show')
		->middleware('can:permission:products.show');
	//6
	Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
		->middleware('can:permission:products.destroy');
	//7
	Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
		->middleware('can:permission:products.edit');

	//Users
	//2
	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('can:permission:users.index');
	//4
	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('can:permission:users.edit');
	//5
	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('can:permission:users.show');
	//6
	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('can:permission:users.destroy');
	//7
	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('can:permission:users.edit');
});