<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignReferencesToTicketsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('tickets', function (Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('statuses');
			$table->foreign('category_id')->references('id')->on('categories');
			$table->foreign('user_id')->references('id')->on('users');
			$table->timestamps();
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
