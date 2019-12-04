<?php

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

	//category
	//1
	Route::post('categories/store', 'CategoryController@store')->name('categories.store')
		->middleware('can:permission:categories.create');
	//2
	Route::get('categories', 'CategoryController@index')->name('categories.index')
		->middleware('can:permission:categories.index');
	//3
	Route::get('categories/create', 'CategoryController@create')->name('categories.create')
		->middleware('can:permission:categories.create');
	//4
	Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')
		->middleware('can:permission:categories.edit');
	//5
	Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')
		->middleware('can:permission:categories.show');
	//6
	Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')
		->middleware('can:permission:categories.destroy');
	//7
	Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')
		->middleware('can:permission:categories.edit');

	//client
	//1
	Route::post('clients/store', 'ClientController@store')->name('clients.store')
		->middleware('can:permission:clients.create');
	//2
	Route::get('clients', 'ClientController@index')->name('clients.index')
		->middleware('can:permission:clients.index');
	//3
	Route::get('clients/create', 'ClientController@create')->name('clients.create')
		->middleware('can:permission:clients.create');
	//4
	Route::put('clients/{client}', 'ClientController@update')->name('clients.update')
		->middleware('can:permission:clients.edit');
	//5
	Route::get('clients/{client}', 'ClientController@show')->name('clients.show')
		->middleware('can:permission:clients.show');
	//6
	Route::delete('clients/{client}', 'ClientController@destroy')->name('clients.destroy')
		->middleware('can:permission:clients.destroy');
	//7
	Route::get('clients/{client}/edit', 'ClientController@edit')->name('clients.edit')
		->middleware('can:permission:clients.edit');

	//tickets
	//1
	Route::post('tickets/store', 'TicketController@store')->name('tickets.store')
		->middleware('can:permission:tickets.create');
	//2
	Route::get('tickets', 'TicketController@index')->name('tickets.index')
		->middleware('can:permission:tickets.index');
	//3
	Route::get('tickets/create', 'TicketController@create')->name('tickets.create')
		->middleware('can:permission:tickets.create');
	//4
	Route::put('tickets/{ticket}', 'TicketController@update')->name('tickets.update')
		->middleware('can:permission:tickets.edit');
	//5
	Route::get('tickets/{ticket}', 'TicketController@show')->name('tickets.show')
		->middleware('can:permission:tickets.show');
	//6
	Route::delete('tickets/{ticket}', 'TicketController@destroy')->name('tickets.destroy')
		->middleware('can:permission:tickets.destroy');
	//7
	Route::get('tickets/{ticket}/edit', 'TicketController@edit')->name('tickets.edit')
		->middleware('can:permission:tickets.edit');

	//problems
	//1
	Route::post('problems/store', 'ProblemController@store')->name('problems.store')
		->middleware('can:permission:problems.create');
	//2
	Route::get('problems', 'ProblemController@index')->name('problems.index')
		->middleware('can:permission:problems.index');
	//3
	Route::get('problems/create', 'ProblemController@create')->name('problems.create')
		->middleware('can:permission:problems.create');
	//4
	Route::put('problems/{problem}', 'ProblemController@update')->name('problems.update')
		->middleware('can:permission:problems.edit');
	//5
	Route::get('problems/{problem}', 'ProblemController@show')->name('problems.show')
		->middleware('can:permission:problems.show');
	//6
	Route::delete('problems/{problem}', 'ProblemController@destroy')->name('problems.destroy')
		->middleware('can:permission:problems.destroy');
	//7
	Route::get('problems/{problem}/edit', 'ProblemController@edit')->name('problems.edit')
		->middleware('can:permission:problems.edit');

	//turn
	//1
	Route::post('turns/store', 'TurnController@store')->name('turns.store')
		->middleware('can:permission:turns.create');
	//2
	Route::get('turns', 'TurnController@index')->name('turns.index')
		->middleware('can:permission:turns.index');
	//3
	Route::get('turns/create', 'TurnController@create')->name('turns.create')
		->middleware('can:permission:turns.create');
	//4
	Route::put('turns/{turn}', 'TurnController@update')->name('turns.update')
		->middleware('can:permission:turns.edit');
	//5
	Route::get('turns/{turn}', 'TurnController@show')->name('turns.show')
		->middleware('can:permission:turns.show');
	//6
	Route::delete('turns/{turn}', 'TurnController@destroy')->name('turns.destroy')
		->middleware('can:permission:turns.destroy');
	//7
	Route::get('turns/{turn}/edit', 'TurnController@edit')->name('turns.edit')
		->middleware('can:permission:turns.edit');

	//priority
	//1
	Route::post('priorities/store', 'PriorityController@store')->name('priorities.store')
		->middleware('can:permission:priorities.create');
	//2
	Route::get('priorities', 'PriorityController@index')->name('priorities.index')
		->middleware('can:permission:priorities.index');
	//3
	Route::get('priorities/create', 'PriorityController@create')->name('priorities.create')
		->middleware('can:permission:priorities.create');
	//4
	Route::put('priorities/{category}', 'PriorityController@update')->name('priorities.update')
		->middleware('can:permission:priorities.edit');
	//5
	Route::get('priorities/{category}', 'PriorityController@show')->name('priorities.show')
		->middleware('can:permission:priorities.show');
	//6
	Route::delete('priorities/{category}', 'PriorityController@destroy')->name('priorities.destroy')
		->middleware('can:permission:priorities.destroy');
	//7
	Route::get('priorities/{category}/edit', 'PriorityController@edit')->name('priorities.edit')
		->middleware('can:permission:priorities.edit');

	//status
	//1
	Route::post('statuses/store', 'StatusController@store')->name('statuses.store')
		->middleware('can:permission:statuses.create');
	//2
	Route::get('statuses', 'StatusController@index')->name('statuses.index')
		->middleware('can:permission:statuses.index');
	//3
	Route::get('statuses/create', 'StatusController@create')->name('statuses.create')
		->middleware('can:permission:statuses.create');
	//4
	Route::put('statuses/{status}', 'StatusController@update')->name('statuses.update')
		->middleware('can:permission:statuses.edit');
	//5
	Route::get('statuses/{status}', 'StatusController@show')->name('statuses.show')
		->middleware('can:permission:statuses.show');
	//6
	Route::delete('statuses/{status}', 'StatusController@destroy')->name('statuses.destroy')
		->middleware('can:permission:statuses.destroy');
	//7
	Route::get('statuses/{status}/edit', 'StatusController@edit')->name('statuses.edit')
		->middleware('can:permission:statuses.edit');
});