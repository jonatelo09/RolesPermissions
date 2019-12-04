<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('tickets', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('folio');
			$table->string('commentary');
			$table->bigInteger('problem_id')->unsigned()->nullable();

			$table->bigInteger('client_id')->unsigned()->nullable();

			$table->bigInteger('turn_id')->unsigned()->nullable();

			$table->bigInteger('status_id')->unsigned()->nullable();

			$table->bigInteger('category_id')->unsigned()->nullable();

			$table->bigInteger('user_id')->unsigned()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('tickets');
	}
}
