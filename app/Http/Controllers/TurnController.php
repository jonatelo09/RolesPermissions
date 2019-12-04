<?php

namespace App\Http\Controllers;

use App\Turn;
use Illuminate\Http\Request;

class TurnController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$turnos = Turn::paginate(2);

		return view('turns.index', compact('turnos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('turns.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$turns = Turn::create($request->all());
		return redirect()->route('turns.index', $turns->id)
			->with('info', 'Turno Guardado con Éxito!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Status  $Status
	 * @return \Illuminate\Http\Response
	 */
	public function show(Turn $turns) {
		return view('turns.show', compact('turns'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Status  $Status
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Turn $turns) {
		return view('turns.edit', compact('turns'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Status  $Status
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Turn $turns) {
		$turns->update($request->all());
		return redirect()->route('turns.index', $turns->id)
			->with('info', 'Turno actualizado con Éxito!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Status  $Status
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Turn $turns) {
		$status->delete();
		return back()->with('info', 'Turno Eliminado correctamente');
	}
}
