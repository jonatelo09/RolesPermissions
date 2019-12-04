<?php

namespace App\Http\Controllers;

use App\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$priority = Priority::paginate(2);

		return view('priorities.index', compact('priority'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('priorities.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$priority = Priority::create($request->all());
		return redirect()->route('priorities.index', $priority->id)
			->with('info', 'Prioridad Guardado con Éxito!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Status  $Status
	 * @return \Illuminate\Http\Response
	 */
	public function show(Priority $priority) {
		return view('priorities.show', compact('priority'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Status  $Status
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Priority $priority) {
		return view('priorities.edit', compact('priority'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Status  $Status
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Priority $priority) {
		$priority->update($request->all());
		return redirect()->route('priorities.index', $priority->id)
			->with('info', 'Prioridad actualizado con Éxito!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Status  $Status
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Priority $priority) {
		$priority->delete();
		return back()->with('info', 'Prioridad Eliminado correctamente');
	}
}
