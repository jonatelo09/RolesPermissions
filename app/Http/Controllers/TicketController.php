<?php

namespace App\Http\Controllers;

use App\Category;
use App\Client;
use App\Priority;
use App\Problem;
use App\Status;
use App\Ticket;
use App\Turn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$tickets = DB::table('tickets')
			->join('turns as c', 'tickets.turn_id', '=', 'c.id')
			->join('categories as cat', 'tickets.category_id', '=', 'cat.id')
			->join('clients as cl', 'tickets.client_id', '=', 'cl.id')
			->join('problems as pr', 'tickets.problem_id', '=', 'pr.id')
			->join('priorities as pt', 'tickets.priority_id', '=', 'pt.id')
			->join('statuses as st', 'tickets.status_id', '=', 'st.id')
			->join('users as us', 'tickets.user_id', '=', 'us.id')
			->select('tickets.id', 'tickets.folio', 'c.name_tur', 'cat.name_cat', 'cl.name_cli', 'pr.name_pro', 'pt.name_pri', 'st.name_sta', 'us.email')
			->paginate(10);
		return view('tickets.index', compact('tickets'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$turnos = Turn::orderBy('name_tur')->get();
		$problems = Problem::orderBy('name_pro')->get();
		$status = Status::orderBy('name_sta')->get();
		$priorities = Priority::orderBy('name_pri')->get();
		$clients = Client::orderBy('name_cli')->get();
		$categories = Category::orderBy('name_cat')->get();
		return view('tickets.create', compact('turnos', 'clients', 'categories', 'problems', 'status', 'priorities'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$tickets = new Ticket();
		$tickets->folio = $request->input('folio');
		$tickets->commentary = $request->input('commentary');
		$tickets->category_id = $request->category_id;
		$tickets->problem_id = $request->problem_id;
		$tickets->priority_id = $request->priority_id;
		$tickets->status_id = $request->status_id;
		$tickets->turn_id = $request->turn_id;
		$tickets->client_id = $request->client_id;
		$tickets->user_id = $request->user_id;
		$tickets->save();

		return redirect()->route('products.index', $tickets->id)
			->with('info', 'Ticket Guardado con Éxito!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function show(Ticket $ticket) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Ticket $ticket) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Ticket $ticket) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Ticket $ticket) {
		//
	}
}
