<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$roles = Role::paginate(10);

		return view('roles.index', compact('roles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$permissions = Permission::get();
		return view('roles.create', compact('permissions'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$role = Role::create($request->all());

		$role->permissions()->sync($request->get('permissions'));

		return redirect()->route('roles.index', $role->id)->with('info', 'Role Guardado con Éxito!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\role  $role
	 * @return \Illuminate\Http\Response
	 */
	public function show(Role $role) {
		return view('roles.show', compact('role'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\role  $role
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Role $role) {

		$permissions = Permission::get();
		return view('roles.edit', compact('role', 'permissions'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\role  $role
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Role $role) {
		$role->update($request->all());

		$role->permissions()->sync($request->get('permissions'));

		return redirect()->route('roles.index', $role->id)
			->with('info', 'Rol actualizado con Éxito!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\role  $role
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Role $role) {
		$role->delete();
		return back()->with('info', 'Eliminado correctamente');
	}
}
