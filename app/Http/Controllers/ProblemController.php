<?php

namespace App\Http\Controllers;

use App\Problem;
use Illuminate\Http\Request;

class ProblemController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$problems = Problem::paginate(10);
		return view('problems.index', compact('problems'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('problems.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$problem = Problem::create($request->all());
		return redirect()->route('problems.index', $problem->id)
			->with('info', 'Problema Guardado con Éxito!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Problem  $problem
	 * @return \Illuminate\Http\Response
	 */
	public function show(Problem $problem) {
		return view('problems.show', compact('problem'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Problem  $problem
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Problem $problem) {
		return view('problems.edit', compact('problem'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Problem  $problem
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Problem $problem) {
		$problem->update($request->all());
		return redirect()->route('problems.index', $problem->id)
			->with('info', 'Problema actualizado con Éxito!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Problem  $problem
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Problem $problem) {
		$problem->delete();
		return back()->with('info', 'Problem Eliminado correctamente');
	}
}
