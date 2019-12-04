<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$users = User::paginate(10);

		return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

		return view('users.create', compact('permissions'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$user = User::create($request->all());
		$user->permissions()->sync($request->get('permissions'));
		return redirect()->route('users.edit', $user->id)
			->width('info', 'Usuario Guardado con Éxito!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\User  $User
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user) {
		return view('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\User  $User
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user) {

		$roles = Role::get();
		$permissions = Permission::get();
		return view('users.edit', compact('user', 'roles', 'permissions'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\User  $User
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, User $user) {
		$user->update($request->all());

		$user->roles()->sync($request->get('roles'));

		return redirect()->route('users.index', $user->id)
			->with('info', 'Usuario actualizado con Éxito!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\User  $User
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user) {
		$user->delete();
		return back()->with('info', 'Eliminado correctamente');
	}
}
