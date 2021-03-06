<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTicketsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('tickets', function (Blueprint $table) {
			$table->foreign('problem_id')->references('id')->on('problems');
			$table->foreign('client_id')->references('id')->on('clients');
			$table->foreign('turn_id')->references('id')->on('turns');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('tickets', function (Blueprint $table) {
			//
		});
	}
}
