<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignPriorityToTicketsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('tickets', function (Blueprint $table) {
			$table->bigInteger('priority_id')->unsigned()->nullable();
			$table->foreign('priority_id')->references('id')->on('priorities');
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
